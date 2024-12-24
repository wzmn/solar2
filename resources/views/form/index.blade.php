<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form Entries') }}  
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
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-300 p-2 text-left">Name</th>
                                <th class="border border-slate-300 p-2 text-left">City</th>
                                <th class="border border-slate-300 p-2 text-left">State</th>
                                <th class="border border-slate-300 p-2 text-left">Location</th>
                                <th class="border border-slate-300 p-2 text-left">Email</th>
                                <th class="border border-slate-300 p-2 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($formEntries as $item)
                                <tr>
                                    <td class="border border-slate-300 py-2 px-2 text-left">
                                        {{ $item->name }}
                                    </td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">
                                        {{ $item->city }}
                                    </td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">
                                        {{ $item->state }}
                                    </td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">
                                        {{ $item->form_type }}
                                    </td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">
                                        {{ $item->email }}
                                    </td>
                                    <td class="border border-slate-300 px-2">
                                        <div class="flex gap-3 justify-end">
                                            <a class="border-l-2 px-2" href="{{ route('form.show', $item) }}">View</a>
                                            <form method="POST" action="{{ route('form.destroy', $item) }}">
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