<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Testimonial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('testimonials.index') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20">
                        <path style="fill:#fff" d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z" data-name="Left"></path>
                    </svg>
                    Back
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('name') }}" required>
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="designation" class="block text-sm font-medium text-gray-700">Designation (Optional)</label>
                            <input type="text" name="designation" id="designation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('designation') }}">
                            @error('designation') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="company" class="block text-sm font-medium text-gray-700">Company Name</label>
                            <input type="text" name="company" id="company" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('company') }}">
                            @error('company') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                      <div class="mb-4">  
                        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                        <select name="type" id="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="client">Client</option>  
                            <option value="employee">Employee</option> </select>

                        @error('type') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" name="image" id="image"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        <div class="mb-4">
                            <label for="testimonial" class="block text-sm font-medium text-gray-700">Testimonial</label>
                            <textarea id="mytextarea" name="testimonial">{{ old('testimonial') }}</textarea>
                            @error('testimonial') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                Create Testimonial
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
        });
    </script>

</x-app-layout>

