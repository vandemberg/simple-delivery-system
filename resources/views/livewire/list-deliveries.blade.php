<div>
    <div class="mb-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full p-4 flex flex-row justify-between align-center">
                    <x-text-input
                        id="password"
                        class="block mt-1 w-full mr-4"
                        type="text"
                        wire:model="search"
                        placeholder="Pesquise por nome, telefone, ou descrição do produto"
                    />
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="mt-6 w-full text-left text-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>CLIENTE</th>
                                <th>MOTORISTA</th>
                                <th>SITUAÇÃO</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deliveries as $delivery)
                                <tr>
                                    <td>{{ $delivery->id }}</td>
                                    <td>{{ $delivery->customer->name }}</td>
                                    <td>{{ $delivery->driverName() }}</td>
                                    <td>{{ __("delivery.".$delivery->status) }}</td>
                                    <td>
                                        <x-secondary-button
                                            x-data="{{$delivery->toJson()}}"
                                        >
                                            Editar <i class="pl-1 fa-solid fa-pencil"></i>
                                        </x-secondary-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
