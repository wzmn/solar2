<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit ' . $block->name) }}
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
                <a href="{{ route('block.index') }}"
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
                    <form method="POST" action="{{ route('block.update', $block) }}" name="update">
                        @csrf
                        @method('PATCH')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('name', $block->name) }}" required>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <input type="text" name="type" id="type"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                value="{{ old('type', $block->type) }}" required>
                            @error('type')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4 hidden">
                            <label for="data" class="block text-sm font-medium text-gray-700">Data (JSON
                                format):</label>
                            <textarea name="data" id="data" rows="5"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('data', $block->data) }}</textarea>
                            @error('data')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <?php
                        
                        $data = json_decode($block->data);
                        $i = 0;
                        foreach ($data as $item) {
                            if (!isset($item->order)) {
                                $item->order = $i++;
                            }
                        }
                        $block->data = json_encode($data);
                        ?>
                        <div x-data="{
                            fields: {{ $block->data }},
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
                            rerenderKey: 0,
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
                            reorderRows(currentIndex, newIndex) {
                                console.log(currentIndex, newIndex, this.fields.length - 1 && newIndex < 0);

                                [this.fields[currentIndex], this.fields[newIndex]] = [this.fields[newIndex], this.fields[currentIndex]];

                                // Trigger Alpine.js to re-render by forcing a change detection
                                this.fields = [...this.fields];
                        
                                // Refresh TinyMCE instances (if used)
                                this.load();
                            },
                        }" class="flex flex-col">
                            <div class="mb-4 cursor-pointer flex-grow flex-1">
                                <span class="border border-gray-300 cursor-pointer px-4 py-2 text-xs"
                                    @click="addField()">Add Field
                                    +</span>
                            </div>
                            <table class="mb-2 table-auto w-full border-separate border-spacing-y-8">
                                <tbody>
                                    <template x-for="(field, index) in fields" :key="index">
                                        <tr class="row">
                                            <td class="border-b-2 border p-2 shadow-sm relative" width="7%">
                                                <svg @click="reorderRows(index, (index)-1)"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-chevron-compact-up w-full cursor-pointer"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894z" />
                                                </svg>
                                                <div x-text="index"
                                                    class="disabled pointer-events-none text-xs text-gray-500 w-16 border border-gray-300 p-2 text-center">
                                                </div>
                                                <svg @click="reorderRows(index, (index)+1)"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor"
                                                    class="bi bi-chevron-compact-down w-full cursor-pointer"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67" />
                                                </svg>
                                            </td>
                                            <td class="border-b-2 border p-2 shadow-sm" width="16%">
                                                <select class="border border-gray-300 cursor-alias w-full"
                                                    id="type" x-model="fields[index].type">
                                                    <option value="text">Text</option>
                                                    <option value="wysiwyg">Wysiwyg</option>
                                                    <option value="image">Image</option>
                                                    <option value="link">Link</option>
                                                </select>
                                                <div
                                                    x-effect="console.log('Maybe order changed:', fields[index].order), load()">
                                                </div>
                                            </td>
                                            <template x-if="fields[index].type === 'text'">
                                                <td class="border-b-2 border p-2 shadow-sm" width="66%">
                                                    <input type="text" x-model="fields[index].content"
                                                        class="border border-gray-300 cursor-pointer w-full">
                                                </td>
                                            </template>
                                            <template x-if="fields[index].type === 'image'">
                                                <td class="border-b-2 border p-2 shadow-sm" width="66%">
                                                    <div class="flex gap-3 items-center flex-wrap-reverse">
                                                        <span class="border border-gray-300 cursor-pointer p-2"
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
                                                <td class="border-b-2 border p-2 shadow-sm" width="66%">
                                                    <input type="url" x-model="fields[index].content"
                                                        class="border border-gray-300 cursor-pointer">
                                                </td>
                                            </template>
                                            <template x-if="fields[index].type === 'wysiwyg'">
                                                <td class="border-b-2 border p-2 shadow-sm" width="66%">
                                                    <wysiwyg class="border border-gray-300 cursor-pointer"
                                                        x-bind:id="index"></wysiwyg>
                                                    <input type="hidden" name="content" some="content"
                                                        x-model="fields[index].content" data-content>
                                                </td>
                                            </template>
                                            <td class="text-right border-b-2 border p-2 shadow-sm" width="17%">
                                                <button @click="fields.splice(index, 1)"
                                                    class="border-red-100 px-4 py-2 border border-gray-300 cursor-pointer">Remove</button>
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
                                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-xl">
                                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                                <div>
                                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                        <h3 class="text-base font-semibold text-gray-900"
                                                            id="modal-title">Choose an Image</h3>
                                                        <div class="mt-2 grid gap-4 gallery-container"
                                                            style="grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));">
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
                            <button type="submit"
                                @click="$event.preventDefault(),saveFields(),document.forms.namedItem('update').submit()"
                                class="px-4 w-20 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div attribute>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
