<?php 
// var_dump($form);

?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Viewing ' . $form->name . '\' enquiry') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex">
                <a href="{{ route('form.index') }}" class="bg-gray-800 flex justify-start px-4 py-2 rounded-md text-white gap-4">
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
                                Name: {{ $form->name }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Email: {{ $form->email }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Phone: {{ $form->phone }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Reason: {{ $form->reason }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Zip: {{ $form->zip }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                City: {{ $form->city }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                State: {{ $form->state }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Country: {{ $form->country }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Message: {{ $form->message }}
                            </td>
                        </tr>
                        <tr class="border-b-2 border-slate-100">
                            <td class="py-4 px-2">
                                Form Submitted on: {{ $form->form_type }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

