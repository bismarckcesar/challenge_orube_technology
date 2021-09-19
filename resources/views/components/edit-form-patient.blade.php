<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>
    <div class="py-12" x-show="open">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('update_patient', $patient->id) }}">
                        @csrf
                        <div>
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" :value="$patient->name" name="name"
                                required autofocus />
                        </div>
                        <div class="flex flex-no-wrap justify-between">

                            <div>
                                <x-label for="age" :value="__('Idade')" />
                                <x-input id="age" class="block mt-1 w-full" type="number" :value="$patient->age" name="age"
                                    required />
                            </div>

                            <div>
                                <x-label for="height" :value="__('Altura')" />
                                <x-input id="height" class="block mt-1 w-full" type="number" :value="$patient->height"
                                    name="height" required />
                            </div>

                            <div>
                                <x-label for="weight" :value="__('Peso')" />
                                <x-input id="weight" class="block mt-1 w-full" type="number" :value="$patient->weight"
                                    name="weight" required />
                            </div>
                            <div>
                                
                                <x-label for="gender" :value="__('Sexo')" />
                                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="gender" id="gender">
                                    @if ($patient->gender == 'masculino')
                                        <option selected value="masculino">masculino</option>
                                        <option value="feminino">feminino</option>
                                    @else
                                        <option  value="masculino">masculino</option>
                                        <option selected value="masculino">feminino</option>
                                    @endif
                                    
                                        
                                    
                                </select>
                            </div>

                        </div>
                        <div>
                            <x-label for="health_plan" :value="__('Plano de Saude')" />
                            <x-input id="health_plan" class="block mt-1 w-full" type="text"
                                :value="$patient->health_plan" name="health_plan" required />
                        </div>
                        <a class="m-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{route('patient')}}">Voltar</a>
                        <x-button>
                            {{ __('Salvar') }}
                        </x-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
