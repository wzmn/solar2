<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Solutions') }}
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
                <a href="{{ route('solutions.create') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">Add New +</a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if ($solutions->isEmpty())
                        <p>No solutions found.</p>
                    @else
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="border border-slate-300 p-2 text-left">Title</th>
                                    <th class="border border-slate-300 p-2 text-left">Description</th>
                                    <th class="border border-slate-300 p-2 text-right">Actions</th>  </header>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solutions as $solution)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $solution->title }}</td>
                                        <td class="border px-4 py-2">{!! Str::limit($solution->description, 50) !!}</td>
                                        <td class="border px-4 py-2">
                                            <div class="flex gap-3 justify-end">
                                                <a href="{{ route('solutions.edit', $solution) }}" class="border-l-2 px-2">Edit</a>
                                                <a href="{{ route('solutions.show', $solution) }}" class="border-l-2 px-2">View</a>
                                                <form action="{{ route('solutions.destroy', $solution) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 border-l-2 px-2" onclick="return confirm('Are you sure you want to delete this solution?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
