<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Testimonials') }}
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
                <a href="{{ route('testimonials.create') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">Add New +</a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($testimonials->isEmpty())
                        <p>No testimonials found.</p>
                    @else
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Testimonial</th>
                                    <th class="px-4 py-2">Designation</th>
                                    <th class="px-4 py-2">Type</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $testimonial->name }}</td>
                                        <td class="border px-4 py-2">{{ Str::limit($testimonial->testimonial, 50) }}</td> {{-- Limit the testimonial text --}}
                                        <td class="border px-4 py-2">{{ $testimonial->designation }}</td>
                                        <td class="border px-4 py-2">{{ $testimonial->type }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('testimonials.edit', $testimonial) }}" class="text-blue-600 hover:underline">Edit</a>
                                            <a href="{{ route('testimonials.show', $testimonial) }}" class="text-green-600 hover:underline">View</a>
                                            <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</button>
                                            </form>                                        </td>
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
