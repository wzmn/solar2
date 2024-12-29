<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit: ' . $page->title) }}
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
            @if ($errors->any())
            <div class="bg-white border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('page.index') }}"
                    class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20">
                        <path style="fill:#fff"
                            d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z"
                            data-name="Left" />
                    </svg>
                    Back </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('page.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ $page->title }}"
                                class="bg-gray-200 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm pointer-events-none">
                        </div>
                        <div class="mb-4">
                            <label for="meta_title" class="block text-sm font-medium text-gray-700">Meta Title</label>
                            <input type="text" value="{{ $page->meta_title }}" name="meta_title" id="meta_title"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta
                                Description</label>
                            <input type="text" value="{{ $page->meta_description }}" name="meta_description"
                                id="meta_description"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords
                                <span class="text-xs">(comma separated)</span></label>
                            <input type="text" value="{{ old('meta_keywords', $page->meta_keywords) }}"
                                name="meta_keywords" id="meta_keywords"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                            <input type="text" id="slug"
                                class="bg-gray-200 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                value="{{ old('title', $page->slug) }}" disabled>
                        </div>

                        <div class="mb-4">
                            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                            <select name="author_id" id="author" required>
                                @foreach ($users as $user)
                                    <option {{ $user->author_id == $page->author_id ? 'selected' : '' }}
                                        value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" name="date" id="date"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                value="{{ old('date', $page->date) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <input id="content" value='{{ old('content', $page->content) }}' type="hidden"
                                name="content">
                            <textarea id="mytextarea">{{ old('content', $page->content) }}</textarea>
                        </div>

                        <div class="" id="blockComponent">
                            <h3 class="mb-4">Blocks</h3>
                            <div class="flex mb-4">
                                <div>
                                    <select id="add-component">
                                        <option value="none">None</option>
                                        @foreach ($allBlocks as $component)
                                            <option value="{{ $component->id }}">{{ $component->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="button" class=" border border-gray-300 py-2 px-4"
                                    id="add-component-button">Add
                                    Component</button>
                            </div>
                            <table id="blocks-container" class="table-auto w-full">
                                <thead>
                                    <th class="border border-slate-300 p-2 text-left">Name</th>
                                    <th class="border border-slate-300 p-2 text-left">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($page->blocks->sortBy('order') as $component)
                                        <tr class="component-item" data-component-id="{{ $component->id }}">
                                            <td class="border border-slate-300 p-2">
                                                <input type="hidden" name="blocks[{{ $loop->index }}][id]"
                                                    value="{{ $component->id }}">
                                                <input type="hidden" name="blocks[{{ $loop->index }}][order]"
                                                    value="{{ $component->order }}">
                                                {{ $component->name }} ({{ $component->type }})
                                                @if ($component->type === 'text')
                                                    <p>{{ $component->data['text'] ?? '' }}</p>
                                                @elseif ($component->type === 'image')
                                                    <img src="{{ asset('storage/' . $component->data['path'] ?? '') }}"
                                                        alt="Component Image">
                                                @endif
                                            </td>
                                            <td class="border border-slate-300 p-2">
                                                <span type="submit"
                                                    class="cursor-pointer px-2 text-red-700">Remove</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>




                        <div class="mt-6">
                            <button type="submit"
                                class="bg-gray-800 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update page
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
            plugins: 'code',
            setup: function(editor) {
                editor.on('change', function() {
                    document.querySelector("#content").value = editor.getContent();
                });
            }
        });
        document.getElementById('add-component-button').addEventListener('click', function() {
            const componentId = document.getElementById('add-component').value;
            const si = document.getElementById('add-component').options.selectedIndex;
            const txt = document.getElementById('add-component').options[si].innerText
            const tableBody = document.querySelector('#blocks-container tbody');
            const tableBodyRow = document.querySelectorAll('#blocks-container tbody tr');

            if (componentId === 'none') return;

            const row = createComponentRow({
                id: componentId,
                order: 1,
                name: txt,
                type: "pending"
            }, tableBodyRow.length);
            
            
            tableBody.appendChild(row);
        });

        function createComponentRow(component, index) {
            const tr = document.createElement('tr');
            tr.classList.add('component-item');
            tr.dataset.componentId = component.id;

            const td1 = document.createElement('td');
            td1.classList.add('border', 'border-slate-300', 'p-2');

            const idInput = document.createElement('input');
            idInput.type = 'hidden';
            idInput.name = `blocks[${index}][id]`;
            idInput.value = component.id;

            const orderInput = document.createElement('input');
            orderInput.type = 'hidden';
            orderInput.name = `blocks[${index}][order]`;
            orderInput.value = component.order;

            td1.textContent = `${component.name} (${component.type})`;

            if (component.type === 'text') {
                const p = document.createElement('p');
                p.textContent = component.data?.text || ''; // Use optional chaining
                td1.appendChild(p);
            } else if (component.type === 'image') {
                const img = document.createElement('img');
                img.src = `/storage/${component.data?.path || ''}`; // Assuming asset function is just prepending /storage
                img.alt = 'Component Image';
                td1.appendChild(img);
            }

            td1.appendChild(idInput);
            td1.appendChild(orderInput);

            const td2 = document.createElement('td');
            td2.classList.add('border', 'border-slate-300', 'p-2');

            const removeSpan = document.createElement('span');
            removeSpan.type = 'submit'; // This doesn't do anything on a span
            removeSpan.classList.add('cursor-pointer', 'px-2', 'text-red-700');
            removeSpan.textContent = 'Remove';
            // Add Event Listener for Remove Functionality here
            removeSpan.addEventListener('click', (event) => {
                tr.remove()
            })
            td2.appendChild(removeSpan);

            tr.appendChild(td1);
            tr.appendChild(td2);

            return tr;
        }
    </script>
</x-app-layout>
