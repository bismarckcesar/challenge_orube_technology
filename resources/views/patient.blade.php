<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>
    <div x-data="{ open: false }">
        <div class="float-right mt-5 mr-16 pr-1" x-show="!open" x-on:click="open = !open">
            <x-button>
                {{ __('Adicionar') }}
            </x-button>
        </div>
        <div class="py-12" x-show="open">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <x-register-form-patient />
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12 flex justify-center content-center  m-auto" x-show="!open">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class=" m-auto p-6 bg-white border-b border-gray-200">
                        @if (session('message'))
                        <div class="alert w-full alert-success flex items-center justify-center border border-indigo-200 bg-indigo-200	">
                            {{ session('message') }}
                        </div>
                             @endif
                        <table class=" w-full flex-no-wrap justify-center w-full content-center bg-gray-200">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">Nome</th>
                                    <th class="border px-4 py-2">Idade</th>
                                    <th class="border px-4 py-2">Altura</th>
                                    <th class="border px-4 py-2">Peso</th>
                                    <th class="border px-4 py-2">Sexo</th>
                                    <th class="border px-4 py-2">Plano de saude</th>
                                    <th class="border px-4 py-2">Ações</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\Patient::all() as $patient)

                                    <tr class="border  bg-gray-100">
                                        <td class="p-8">{{ $patient->name}}</td>
                                        <td class="p-8">{{ $patient->age }}</td>
                                        <td class="p-8">{{ $patient->height }}</td>
                                        <td class="p-8">{{ $patient->weight }}</td>
                                        <td class="p-8">{{ $patient->gender }}</td>
                                        <td class="p-8">{{ $patient->health_plan }}</td>
                                        <td class="flex p-8"><a href="{{ route('edit_patient', $patient) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg></a>
                                            <a href="{{ route('delete_patient', $patient) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg></a>
                                        </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
