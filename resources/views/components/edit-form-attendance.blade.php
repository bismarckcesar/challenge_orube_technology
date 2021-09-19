<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medicos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('update_attendance', $attendance->id) }}">
                        @csrf
                        <div class="flex flex-col">
                            <x-label for="room" :value="__('Sala')" />
                            <x-input id="room" class="block mt-1 w-full" type="text" :value="$attendance->room"
                                name="room" required autofocus />
                        </div>
                    <div class="flex flex-no-wrap justify-between">
                        
                        <div class="">
                            <x-label for="time" :value="__('Horario')" />
                            <x-input id="time" class="block mt-1 w-full" type="time" :value="$attendance->time"
                                name="time" required />
                            </div>
                            
                            <div class="">
                                <x-label for="date" :value="__('Data')" />
                                <x-input id="date" class="block mt-1 w-full" type="date" :value="$attendance->date" name="date"
                                    required />
                                </div>
                                
                                
                                <div class="">
                                    <x-label for="patient" class="block mt-1 w-full" :value="__('Paciente')" />
                                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="patient_id" required>
                                        @foreach (App\Models\Patient::all() as $patient)
                                        @if ($patient->name == App\Models\Patient::find($attendance->patient_id)->name)
                                        <option selected value="{{ $patient->id }}">{{ $patient->name }}</option>
                                        @else
                                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                        @endif
                                        
                                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="">
                                    <x-label for="doctor" class="block mt-1 w-full" :value="__('Medico')" />
                                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="doctor_id" required>
                                        @foreach (App\Models\Doctor::all() as $doctor)
                                        @if ($doctor->name == App\Models\Doctor::find($attendance->doctor_id)->name)
                                        <option selected value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @else
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                                <div>
                                <x-label for="disease" class="block mt-1 w-full" :value="__('Doença/Sintomas')" />
                            <textarea id="disease" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                             name="disease">{{ $attendance->disease }}</textarea>
                        </div>
                        <a class="m-2 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{route('attendance')}}">Voltar</a>
                        <x-button>
                            {{ __('Salvar') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
