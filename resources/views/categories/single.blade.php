<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('categories.index') }}"
                    class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20">
                        <path style="fill:#fff"
                            d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z"
                            data-name="Left" />
                    </svg>
                    Back
                </a>

                {{-- <a href="{{ route('categories.edit', $category) }}"  class="bg-blue-500 flex justify-start px-4 py-2 rounded-md text-white gap-4 ml-2">Edit Category</a> --}}

            </div>



            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <span class="block text-sm font-medium text-gray-700">Title:</span>
                        <p>{{ $category->title }}</p> </div>

                    <div class="mb-4">
                        <span class="block text-sm font-medium text-gray-700">Description:</span>
                        <p>{{ $category->content }}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
