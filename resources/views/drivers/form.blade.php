<form method="POST" action="{{ empty($driver->id) ? route('drivers.store') : route('drivers.update', $driver) }}">
  @csrf
  @if ($driver->id)
    @method('PATCH')
  @endif

  <div class="pt-4">
      <x-input-label for="name" :value="__('Nome')" />
      <x-text-input
        class="mt-1 block w-full" :value="old('name', $driver->name)"
        id="name"
        name="name"
        type="text"
        required
        autofocus
        autocomplete="name"
        placeholder="Nome do motorista"
      />
      <x-input-error class="mt-2" :messages="$errors->get('name')" />
  </div>

  <div class="pt-4">
    <x-input-label for="phone" :value="__('Telefone')" />
    <x-text-input
      class="mt-1 block w-full" :value="old('phone', $driver->phone)"
      id="phone"
      name="phone"
      type="text"
      required
      autofocus
      autocomplete="phone"
      placeholder="(81) 9 9696-1947"
    />
    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
</div>

  <div class="pt-4">
    <x-primary-button>Salvar</x-primary-button>
  </div>
</form>

<script>
  $('#phone').mask('(00) 00000-0000');
</script>
