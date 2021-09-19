<form method="POST" action="{{ route('create_attendance')}}">
@csrf
        <div>
            <x-label for="room" :value="__('sala')" />
            <x-input id="room" class="block mt-1 w-full" type="text" maxlength="40" name="room" required autofocus />
        </div>
        <div class="flex flex-no-wrap justify-between">

            <div>
                <x-label for="time" :value="__('horario')" />
                <x-input id="time" class="block mt-1 w-full" type="time" name="time" required />
            </div>
            
            <div>
                <x-label for="date" :value="__('data')" />
                <input id="date" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="date" name="date" required autofocus />
            </div>
            
            
            <div>
                <x-label for="patient" :value="__('paciente')" />
                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="patient_id" required>
                    @foreach(App\Models\Patient::all() as $patient)            
                    <option value="{{$patient->id}}">{{$patient->name}}</option>
                    @endforeach
                </select>
            </div>
            
            <div>
                <x-label for="doctor" :value="__('Medico')" />
                <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="doctor_id" required>
                    @foreach(App\Models\Doctor::all() as $doctor)            
                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
            <div>
                <x-label for="disease" :value="__('Doença/Sintomas')" />
                <textarea id="disease" class="block mt-1 w-full" type="text" maxlength="50" name="disease" >
                </textarea>
            </div>
            <x-button x-on:click="open = !open">
                {{ __('Voltar') }}
            </x-button>
            <x-button >
                {{ __('Salvar') }}
            </x-button>
</form>