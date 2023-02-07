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
      />
      <x-input-error class="mt-2" :messages="$errors->get('name')" />
  </div>

  <div class="pt-4">
    <x-input-label for="phone" :value="__('Telefone')" />
    <x-text-input
      class="mt-1 block w-full" :value="old('phone', $driver->phone ?? '(81) 9')"
      id="phone"
      name="phone"
      type="text"
      required
      autofocus
      autocomplete="phone"
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
