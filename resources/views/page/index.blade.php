<?php 

use App\Models\User;


?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('created'))
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <div class="alert alert-success">
                    {{ session('created') }}
                </div>
            </div>
        @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('page.create') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">Add New + </a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-300 p-2 text-left">Title</th>
                                <th class="border border-slate-300 p-2 text-left">Date Published</th>
                                <th class="border border-slate-300 p-2 text-left">Author</th>
                                <th class="border border-slate-300 p-2 text-left">Slug</th>
                                <th class="border border-slate-300 p-2 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $item)
                                <tr>
                                    <td class="border border-slate-300 py-2 px-2 text-left">
                                        {{ $item->title }}
                                    </td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">{{ $item->created_at }}</td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">{{ User::where('id', $item->author_id)->first()->name }}</td>
                                    <td class="border border-slate-300 py-2 px-2 text-left">/{{ $item->slug }}</td>
                                    <td class="border border-slate-300 px-2">
                                        <div class="flex gap-3 justify-end w-32">
                                            <a href="{{ route('page.edit', $item) }}">Edit</a>
                                            <a href="{{ route('page.show', $item) }}">View</a>
                                            <a class="text-red-700" href="{{ route('page.edit', $item) }}">Delete</a>
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
