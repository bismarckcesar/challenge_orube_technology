<form method="POST" action="{{route('create_patient')}}">
    @csrf
    <div>
        <x-label for="name" :value="__('Nome')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
    </div>
<div class="flex flex-no-wrap justify-between">

    <div>
        <x-label for="age" :value="__('Idade')" />
        <x-input id="age" class="block mt-1 w-full" type="number" name="age" required />
    </div>
    
    <div>
        <x-label for="height" :value="__('Altura')" />
        <x-input id="height" class="block mt-1 w-full" type="number" name="height" required />
    </div>
    
    <div>
        <x-label for="weight" :value="__('Peso')" />
        <x-input id="weight" class="block mt-1 w-full" type="number" name="weight" required />
    </div>
    <div>
    <x-label for="gender" :value="__('Sexo')" />
    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="gender" id="gender">
        <option value="masculino">masculino</option>
        <option value="feminino">feminino</option>
    </select>

    </div>
</div>
    
    <div>
        <x-label for="health_plan" :value="__('Plano de Saude')" />
        <x-input id="health_plan" class="block mt-1 w-full" type="text" name="health_plan" required />
    </div>
    <x-button x-on:click="open = !open">
        {{ __('Voltar') }}
    </x-button>
    <x-button>
        {{ __('Salvar') }}
    </x-button>

</form>
