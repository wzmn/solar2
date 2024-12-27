<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Media Library') }}  {{-- Added translation support --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex"> {{-- Dark mode support --}}
                <a href="{{ route('file.create') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">Add New + </a> {{-- Corrected route name --}}
            </div>

            @if (session('success'))  {{-- Improved flash message display --}}
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                    <div class="alert alert-success"> {{-- Added alert class --}}
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if (session('error')) {{-- Improved flash message display --}}
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                    <div class="alert alert-danger"> {{-- Added alert class --}}
                        {{ session('error') }}
                    </div>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> {{-- Dark mode support --}}
                <div class="p-6 text-gray-900 dark:text-gray-100"> {{-- Dark mode support --}}
                    <h2 class="mb-4">Uploaded Media:</h2>  {{-- Corrected heading to reflect reality of what's being displayed --}}

                    <table class="table-auto w-full">
                        <thead>
                            <th class="border border-slate-300 p-2 text-left">
                                Image
                            </th>
                            <th class="border border-slate-300 p-2 text-left">
                                Name
                            </th>
                            <th class="border border-slate-300 p-2 text-left">
                                File Name
                            </th>
                            <th class="border border-slate-300 p-2 text-right">
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            @forelse ($mediaItems as $media)  {{-- Use forelse to handle empty collections --}}
                                <tr>
                                    <td class="border border-slate-300 py-2 px-2 text-left">
                                        <div class="w-20">
                                            <img src="{{ $media->path }}" alt="{{ $media->name }}" class="mb-2 "> {{-- Added margin --}}
                                        </div>
                                    </td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">{{ $media->title }}</td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">{{ $media->name }}</td>
                                    <td class="border border-slate-300 py-2 px-2 text-right">
                                        <form action="{{ route('file.destroy', $media->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="media_id" value="{{$media->id}}">
                                            <button type="submit" class="text-red-700 border border-red-700 rounded-md py-1 px-2" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>  {{-- Improved button style --}}
                                        </form>
                                    </td>
                                </tr>
                            @empty  {{-- Display message if no media items exist --}}
                                <p>No media items found.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
