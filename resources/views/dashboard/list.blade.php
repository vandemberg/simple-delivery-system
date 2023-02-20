<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-alert-error />
    <x-alert-success />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @include('dashboard.form')
                </div>
            </div>
        </div>
    </div>

    @if(count($deliveries) > 0)
        <div class="mb-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="mt-6 w-full text-left text-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>DESCRIÇÃO</th>
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
                                            @include('dashboard.partials.edit-delivery', [
                                                'delivery' => $delivery,
                                            ])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-6 px-12">
                            {{ $deliveries->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-app-layout>
