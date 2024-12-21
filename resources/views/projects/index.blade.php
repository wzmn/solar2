<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}  
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
                <a href="{{ route('projects.create') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">Add New +</a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($projects->isEmpty())
                        <p>No projects found.</p>
                    @else
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-300 p-2 text-left">Title</th>
                                <th class="border border-slate-300 p-2 text-left">Client</th> </header>
                                <th class="border border-slate-300 p-2 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="border border-slate-300 p-2">{{ $project->title }}</td>
                                    <td class="border border-slate-300 p-2">{{ $project->client }}</td>
                                    <td class="border border-slate-300 p-2 text-right">
                                        <div class="flex gap-3 justify-end">
                                            <a class="border-l-2 px-2" href="{{ route('projects.edit', $project) }}">Edit</a>
                                            <a class="border-l-2 px-2" href="{{ route('projects.show', $project) }}">View</a>
                                            <form method="POST" action="{{ route('projects.destroy', $project) }}">
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

