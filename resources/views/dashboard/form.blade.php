<form
    action="{{empty($delivery->id) ? route('deliveries.store') : route('deliveries.update', $delivery)}}"
    method="POST"
>
    @csrf

    @if(isset($delivery->id))
        @method("PATCH")
    @endif

    <div class="pt-4">
        <x-input-label for="name" :value="__('Descrição')" />
        <x-text-input
          class="mt-1 block w-full"
          id="description"
          name="description"
          type="text"
          required
          autofocus
          autocomplete="description"
          placeholder="Produto da loja"
          value="{{$delivery->description}}"
        />
        <x-input-error class="mt-2" :messages="$errors->get('description')" />
    </div>

    <div class="pt-4 w-full flex justify-between">
        <div class="w-3/5">
            <x-input-label for="address" :value="__('Endereço')" />
            <x-text-input
            class="mt-1 w-full"
            id="address"
            name="address"
            type="text"
            required
            autofocus
            autocomplete="address"
            placeholder="Rua Santo Agudo, 2340 A"
            value="{{$delivery->address}}"
            />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <div class="w-1/4">
            <x-input-label for="CEP" :value="__('CEP')" />
            <x-text-input
            class="mt-1 w-full"
            id="CEP"
            name="CEP"
            type="text"
            required
            autofocus
            autocomplete="CEP"
            placeholder="55000-000"
            value="{{$delivery->CEP}}"
            />

            <x-input-error class="mt-2" :messages="$errors->get('CEP')" />
        </div>
    </div>

    @if(empty($delivery->id))
        <div class="pt-4">
            <select name="customer_id" class="mt-1 blocl w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                <option>-- selecione um cliente --</option>
                @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">
                        {{$customer->name}}#{{$customer->phone}}
                    </option>
                @endforeach
            </select>
        </div>
    @endif

    @if(isset($delivery->id))
        <div class="pt-4 w-full flex justify-center">
            <x-primary-button class="w-full" type="submit">
                <span class="w-full text-center">ATUALIZAR</span>
            </x-primary-button>
        </div>
    @else
        <div class="pt-4">
            <x-primary-button
                type="submit"
                onclick="return confirm('Tem certeza que deseja cadastrar?')"
            >
                CADASTRAR NOVA ENTREGA
            </x-primary-button>
        </div>
    @endif
</form>

<script>
    $('#CEP').mask('00000-000');
</script>
