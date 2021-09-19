<form method="POST" action="{{ route('create_doctor') }}">
    @csrf
    <div>
        <x-label for="name" :value="__('Nome')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
    </div>

    <div>
        <x-label for="specialization" :value="__('Especialização')" />
        <x-input id="specialization" class="block mt-1 w-full" type="text" name="specialization" required />
    </div>
    <x-button x-on:click="open = !open">
        {{ __('Voltar') }}
    </x-button>
    <x-button>
        {{ __('Salvar') }}
    </x-button>

</form>
