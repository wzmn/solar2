<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit: ' . $blog->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('blog.index') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20">
                        <path style="fill:#fff" d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z" data-name="Left"/>
                    </svg>
                    Back </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('title', $blog->title) }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
                            <input type="text" value="{{ $blog->meta_title }}" name="meta_title" id="meta_title"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta
                                Description</label>
                            <input type="text" value="{{ $blog->meta_description }}" name="meta_description"
                                id="meta_description"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords
                                <span class="text-xs">(comma separated)</span></label>
                            <input type="text" value="{{ old('meta_keywords', $blog->meta_keywords) }}"
                                name="meta_keywords" id="meta_keywords"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                            <input type="text" id="slug" class="bg-gray-200 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('title', $blog->slug) }}" disabled>
                        </div>

                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            @if ($blog->image)
                            <img src="{{ Storage::disk('public')->url($blog->image) }}" alt="{{ $blog->title }}" class="mt-2 h-48 w-auto">
                            @endif
                        </div>

                        <div class="mb-4">
                            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                            <select name="author_id" id="author" required>
                                @foreach ($users as $user)
                                    <option {{ $user->author_id == $blog->author_id ? "selected" : "" }} value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4" x-data="{
                            availableCategories: {{ $categories }},
                            selectedCategories: {{ $blog->categories }}, // Initialize as an empty array
                            selectedCategoriesIDs: [], // Initialize as an empty array
                            formatData(){
                               this.selectedCategoriesIDs = this.selectedCategories.map(s => s.id);
                            },
                            addCategory(index) {
                                let AC = this.availableCategories;
                                let ACi = AC[index - 1];
                                if (index === 0) return;
                                if (AC.length > 0) {                        
                                    //Check if the category is already selected
                                    let alreadySelected = this.selectedCategories.filter(s => {
                                        return s.title === ACi.title
                                    })
                                    if (!!alreadySelected.length) {
                                        alert('Category already selected')
                                    } else {
                                        this.selectedCategories.push(ACi);
                                    }
                                }
                                this.formatData()
                            },
                            removeCategory(categoryId) {
                                let newSelected = this.selectedCategories.filter(s => {
                                    return s.id !== categoryId
                                })
                                this.selectedCategories = [...newSelected]
                                this.formatData()
                            },
                            load(){
                                console.log('load', this.selectedCategories)
                            }
                        
                        }">
                            <div class=" mb-4">

                                <label for="categories"
                                    class="block text-sm font-medium text-gray-700">Categories</label>
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                                <div>
                                    <label for="availableCategories" class="text-sm font-bold">Available
                                        Categories</label>

                                    <select x-ref="availableCategories" name="availableCategories" id="availableCategories"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        <option value="Uncategorized">Uncategorized</option>
                                        <template x-for="category in availableCategories" :key="category.id">
                                            <option x-bind:value="category.id" x-text="category.title"></option>
                                        </template>

                                    </select>

                                    <div class="mt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 cursor-pointer rounded"
                                        @click="addCategory($refs.availableCategories.selectedIndex)">Add</div>
                                </div>
                                <div class="hidden"
                                    x-effect="load()">
                                </div>
                                <div>

                                    <label for="selectedCategories" class="text-sm font-bold">Selected
                                        Categories</label>

                                    <template x-for="(category, index) in selectedCategories" :key="category.id">

                                        <div
                                            class="flex items-center justify-between mt-1  w-full rounded-md border p-2">
                                            <span
                                                x-text="category.title"></span>
                                            <div
                                                class="ml-2 cursor-pointer bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded"
                                                @click="removeCategory(category.id)">Remove</div>
                                        </div>

                                    </template>


                                </div>

                            </div>
                            <input type="hidden" name="categories[]" id="categories" :value="selectedCategoriesIDs">

                        </div>
                        <div class="mb-4">
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" name="date" id="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('date', $blog->date) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <input id="content" value='{{ old('content', $blog->content) }}' type="hidden" name="content">
                            <textarea id="mytextarea">{{ old('content', $blog->content) }}</textarea>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="bg-gray-800 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update Blog Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: ['code', 'link'],
            height: 400,
            setup: function(editor) {
                editor.on('change', function() {
                    document.querySelector("#content").value = editor.getContent();
                });
            }
        });
    </script>
</x-app-layout>
