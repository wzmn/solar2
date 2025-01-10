<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Component') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('block.index') }}"
                    class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20">
                        <path style="fill:#fff"
                            d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z"
                            data-name="Left" />
                    </svg>
                    Back </a>
            </div>
            @error('data')
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                    <p class="text-red-500 text-xs mt-1">{{ $message }}, don't forget to click on the save button after adding data</p>
                </div>
            @enderror
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('block.store') }}" id="form1" name="create">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <input type="text" name="type" id="type"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('type') }}" required>
                            @error('type')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 hidden">
                            <label for="data" class="block text-sm font-medium text-gray-700">Data (JSON
                                format):</label>
                            <textarea name="data" id="data" rows="5"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('data') }}</textarea>
                            @error('data')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div x-data="{
                            fields: {{ "[]" }},
                            gallery: false,
                            currentRow: 0,
                            getFormattedFields() { // Function to format the data
                                return this.fields.map((field, index) => {
                                    let rows = document.querySelectorAll('.row');
                                    const data = {}
                                    if (field.type == 'image') {
                                        data.type = field.type;
                                        data.content = rows[index].querySelector('[data-image]').value
                                    }
                                    if (field.type == 'wysiwyg') {
                                        data.type = field.type;
                                        data.content = rows[index].querySelector('[data-content]').value
                                    }
                                    if (field.type == 'link' || field.type == 'text') {
                                        data.type = field.type;
                                        data.content = field.content;
                                    }
                        
                                    return data;
                                });
                            },
                            addField() {
                                this.fields.push({ type: 'text', content: '' })
                            },
                            load() {
                                setTimeout(() => {
                                    [...document.querySelectorAll('wysiwyg')].map(e => {
                                        let html;
                                        if (!!e.parentNode.querySelector('[data-content]').value) {
                                            html = e.parentNode.querySelector('[data-content]').value
                                        }
                                        tinymce.init({
                                            selector: `#${e.id}`,
                                            plugins: 'code',
                                            setup: function(editor) {
                                                editor.on('change', function() {
                                                    let input = e.parentNode.querySelector('[data-content]');
                                                    input.value = editor.getContent();
                                                });
                                                editor.on('init', function() {
                                                    editor.setContent(html);
                                                });
                                            }
                                        });
                        
                        
                                    })
                                }, 100)
                            },
                            saveFields() {
                                const formattedFields = this.getFormattedFields();
                                document.querySelector('#data').innerHTML = JSON.stringify(formattedFields);
                            },
                            reorderRows(fromIndex, toIndex) {
                                console.log('rows moved', fromIndex, toIndex)
                                const [removed] = this.fields.splice(fromIndex, 1);
                                this.fields.splice(toIndex, 0, removed);
                            },
                        }" class="flex flex-col">
                            <div class="mb-4 cursor-pointer flex-grow flex-1">
                                <span class="border border-gray-300 px-4 py-2 text-xs" @click="addField()">Add Field
                                    + <span x-model="fields.length"></span></span>
                            </div>
                            <table class="mb-2 table-auto w-full border-separate border-spacing-y-8">
                                <tbody @dragover.prevent
                                    @drop="reorderRows($event.dataTransfer.getData('text/plain'), $event.target.closest('table').rowIndex -1 )">
                                    <template x-for="(field, index) in fields" :key="index">
                                        <tr class="row">
                                            <td class="border-b-2 border p-2 shadow-sm" width="1%" draggable="true"
                                                @dragstart="event.dataTransfer.setData('text/plain', index)"
                                                class="cursor-grab"><svg width="30px" viewBox="0 0 25 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.5 8C10.3284 8 11 7.32843 11 6.5C11 5.67157 10.3284 5 9.5 5C8.67157 5 8 5.67157 8 6.5C8 7.32843 8.67157 8 9.5 8ZM9.5 14C10.3284 14 11 13.3284 11 12.5C11 11.6716 10.3284 11 9.5 11C8.67157 11 8 11.6716 8 12.5C8 13.3284 8.67157 14 9.5 14ZM11 18.5C11 19.3284 10.3284 20 9.5 20C8.67157 20 8 19.3284 8 18.5C8 17.6716 8.67157 17 9.5 17C10.3284 17 11 17.6716 11 18.5ZM15.5 8C16.3284 8 17 7.32843 17 6.5C17 5.67157 16.3284 5 15.5 5C14.6716 5 14 5.67157 14 6.5C14 7.32843 14.6716 8 15.5 8ZM17 12.5C17 13.3284 16.3284 14 15.5 14C14.6716 14 14 13.3284 14 12.5C14 11.6716 14.6716 11 15.5 11C16.3284 11 17 11.6716 17 12.5ZM15.5 20C16.3284 20 17 19.3284 17 18.5C17 17.6716 16.3284 17 15.5 17C14.6716 17 14 17.6716 14 18.5C14 19.3284 14.6716 20 15.5 20Z"
                                                        fill="#121923" />
                                                </svg></td>
                                            <td class="border-b-2 border p-2 shadow-sm" width="16%">
                                                <select class="border border-gray-300 w-full" id="type" x-model="fields[index].type">
                                                    <option value="text">Text</option>
                                                    <option value="wysiwyg">Wysiwyg</option>
                                                    <option value="image">Image</option>
                                                    <option value="link">Link</option>
                                                </select>
                                                <div
                                                    x-effect="console.log('Selected option changed:', fields[index].type), load()">
                                                </div>
                                            </td>
                                            <template x-if="fields[index].type === 'text'">
                                                <td class="border-b-2 border p-2 shadow-sm" width="80%">
                                                    <input type="text" x-model="fields[index].content"
                                                        class="border border-gray-300 w-full">
                                                </td>
                                            </template>
                                            <template x-if="fields[index].type === 'image'">
                                                <td class="border-b-2 border p-2 shadow-sm" width="80%">
                                                    <div class="flex gap-3 items-center">
                                                    <span class="border border-gray-300 p-2"
                                                        x-on:click="gallery = !gallery, currentRow = index">Select
                                                        file</span>
                                                    <input type="hidden" name="content" some="content"
                                                        x-model="fields[index].content" data-image>
                                                        <template x-if="fields[index].content">
                                                            <img x-bind:src="fields[index].content" class="h-20">
                                                        </template>
                                                    </div>
                                                </td>
                                            </template>
                                            <template x-if="fields[index].type === 'link'">
                                                <td class="border-b-2 border p-2 shadow-sm" width="80%">
                                                    <input type="url" x-model="fields[index].content"
                                                        class="border border-gray-300">
                                                </td>
                                            </template>
                                            <template x-if="fields[index].type === 'wysiwyg'">
                                                <td class="border-b-2 border p-2 shadow-sm" width="80%">
                                                    <wysiwyg class="border border-gray-300"
                                                        x-bind:id="index"></wysiwyg>
                                                    <input type="hidden" name="content" some="content"
                                                        x-model="fields[index].content" data-content>
                                                </td>
                                            </template>
                                            <td class="text-right border-b-2 border p-2 shadow-sm" width="17%">
                                                <button @click="fields.splice(index, 1)"
                                                    class="border-red-100 px-4 py-2 border border-gray-300">Remove</button>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                            <div :class="gallery ? 'relative z-10' : 'hidden'" aria-labelledby="modal-title"
                                role="dialog" aria-modal="true">
                                <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
                                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                                    <div
                                        class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                        <div
                                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                                <div>
                                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                        <h3 class="text-base font-semibold text-gray-900"
                                                            id="modal-title">Choose an Image</h3>
                                                        <div class="mt-2 grid gap-4 gallery-container" style="grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));">
                                                            @forelse ($files as $media)
                                                                <div class="w-20">
                                                                    <img @click="(s) => {console.log(fields[currentRow].content);fields[currentRow].content = s.target.src;gallery = !gallery}"
                                                                        src="{{ $media->path }}"
                                                                        alt="{{ $media->name }}"
                                                                        class="mb-2 h-full object-cover border-2">
                                                                    {{--    Added margin --}}
                                                                </div>
                                                            @empty {{-- Display message if no media items exist --}}
                                                                <p>No media items found.</p>
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                                {{-- <button x-on:click="gallery = ! gallery" type="button"
                                                    class="inline-flex w-full justify-center rounded-md bg-teal-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-teal-500 sm:ml-3 sm:w-auto">Save</button> --}}
                                                <button x-on:click="gallery = ! gallery" type="button"
                                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" @click="$event.preventDefault(),saveFields(),document.forms.namedItem('create').submit()"
                                class="px-4 w-20 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Create
                            </button>
                        </div attribute>
                    </form>
                    <script></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
