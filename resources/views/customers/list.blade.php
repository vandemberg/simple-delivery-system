<x-app-layout>
    <x-page-header title="Clientes"></x-page-header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-page-title title="Listagem de clientes">
                        <a href="{{ route('customers.create') }}">
                            <x-primary-button> Novo cliente</x-primary-button>
                        </a>
                    </x-page-title>

                    <x-alert-success></x-alert-success>

                    <table class="mt-6 w-full text-left text-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Endereço</th>
                                <th>CEP</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{$customer->id}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->fullAddress()}}</td>
                                    <td>{{$customer->showCEP()}}</td>
                                    <td>
                                        <form method="post" action="{{ route('customers.destroy', $customer->id) }}">
                                          @csrf
                                          @method("DELETE")

                                          <x-danger-button
                                            onclick="return confirm('Você tem certeza?')"
                                            type="submit">
                                            deletar
                                          </x-danger-button>

                                          <a href="{{ route('customers.edit', $customer->id) }}">
                                            <x-secondary-button class="ml-2">
                                              editar
                                            </x-secondary-button>
                                          </a>
                                        </form>
                                      </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
