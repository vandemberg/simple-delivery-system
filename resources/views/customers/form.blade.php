<form method="POST" action="{{ empty($customer->id) ? route('customers.store') : route('customers.update', $customer) }}">
    @csrf
    @if ($customer->id)
      @method('PATCH')
    @endif

    <div class="pt-4">
        <x-input-label for="name" :value="__('Nome')" />
        <x-text-input
          class="mt-1 block w-full" :value="old('name', $customer->name)"
          id="name"
          name="name"
          type="text"
          required
          autofocus
          autocomplete="name"
          placeholder="Nome do cliente"
        />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div class="pt-4">
        <x-input-label for="phone" :value="__('Telefone')" />
        <x-text-input
            class="mt-1 block w-full" :value="old('phone', $customer->phone)"
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
        <x-input-label for="address" :value="__('Endereço')" />
        <x-text-input
            class="mt-1 block w-full" :value="old('address', $customer->address)"
            id="address"
            name="address"
            type="text"
            required
            autofocus
            autocomplete="address"
            placeholder="Casa Branca, 311"
        />
        <x-input-error class="mt-2" :messages="$errors->get('address')" />
    </div>

    <div class="pt-4">
        <x-input-label for="neighbourhood" :value="__('Bairro')" />
        <x-text-input
            class="mt-1 block w-full" :value="old('neighbourhood', $customer->neighbourhood)"
            id="neighbourhood"
            name="neighbourhood"
            type="text"
            required
            autofocus
            autocomplete="neighbourhood"
            placeholder="Salgado"
        />
        <x-input-error class="mt-2" :messages="$errors->get('neighbourhood')" />
    </div>

    <div class="pt-4">
        <x-input-label for="city" :value="__('Cidade')" />
        <x-text-input
            class="mt-1 block w-full" :value="old('city', $customer->city)"
            id="city"
            name="city"
            type="text"
            required
            autofocus
            autocomplete="city"
            placeholder="Caruaru"
        />
        <x-input-error class="mt-2" :messages="$errors->get('city')" />
    </div>

    <div class="pt-4">
        <x-input-label for="CEP" :value="__('CEP')" />
        <x-text-input
            class="mt-1 block w-full" :value="old('CEP', $customer->CEP)"
            id="CEP"
            name="CEP"
            type="text"
            autofocus
            autocomplete="CEP"
            placeholder="Caruaru"
        />
        <x-input-error class="mt-2" :messages="$errors->get('CEP')" />
    </div>

    <div class="pt-4">
      <x-primary-button>Salvar</x-primary-button>
    </div>
  </form>

  <script>
    $('#phone').mask('(00) 00000-0000');
    $('#CEP').mask('00000-000');
  </script>
