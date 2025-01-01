<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Viewing ' . $project->title . '\' enquiry') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('projects.index') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20">
                        <path style="fill:#fff" d="M24 12.001H2.914l5.294-5.295-.707-.707L1 12.501l6.5 6.5.707-.707-5.293-5.293H24v-1z" data-name="Left"></path>
                    </svg>
                    Back
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Title: {{ $project->title }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Client: {{ $project->client }}
                            </td>
                        </tr>
                        @if ($project->image)
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Image: <img src="{{ Storage::disk('public')->url($project->image) }}" class="max-w-xl">
                            </td>
                        </tr>
                        @endif
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Description: {!! $project->description !!}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

