<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blocks') }}
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
                <a href="{{ route('block.create') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">Add New + </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-300 p-2 text-left">Name</th>
                                <th class="border border-slate-300 p-2 text-left">Type</th>
                                <th class="border border-slate-300 p-2 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blocks as $component)
                                <tr>
                                    <td class="border border-slate-300 p-2">{{ $component->name }}</td>
                                    <td class="border border-slate-300 p-2">{{ $component->type }}</td>
                                    <td class="border border-slate-300 px-2 text-right">
                                        <div class="flex gap-3 justify-end">
                                            <a class="border-l-2 px-2" href="{{ route('block.edit', $component) }}">Edit</a>
                                            <a class="border-l-2 px-2" href="{{ route('block.show', $component) }}">View</a>
                                            <form method="POST" action="{{ route('block.destroy', $component) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="border-l-2 px-2 text-red-700">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

