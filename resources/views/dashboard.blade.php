<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    @if(!empty($deliveries))
                        <table>
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>NOME</td>
                                    <td>TELEFONE</td>
                                    <td>ENDEREÇO</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deliveries as $delivery)
                                    <tr>
                                        <td>{{ $delivery->id }}</td>
                                        <td>{{ $delivery->customer->name }}</td>
                                        <td>{{ $delivery->customer->fullAddress() }}</td>
                                        <td>{{ $delivery->driver->name }}</td>
                                        <td>
                                            <x-danger-button>CANCELAR</x-primary-button>
                                            <x-primary-button>ATUALIZAR</x-primary-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
