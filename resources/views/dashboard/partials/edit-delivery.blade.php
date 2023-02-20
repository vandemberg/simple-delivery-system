<x-secondary-button
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'edit-delivery-{{$delivery->id}}')"
>Editar <i class="pl-1 fa-solid fa-pencil"></i></x-secondary-button>

<x-modal name="edit-delivery-{{$delivery->id}}">
    <div class="w-full p-8 pb-4">
        <div class="py-4">
            <p class="text-xl"><strong>Editar entrega</strong></p>
            @include('dashboard.form', ['delivery' => $delivery])
        </div>

        <div>
            <h1 class="text-center"> Você quer as coisas rápido ou mastigado?</h1>

            <div class="w-full flex justify-between flex-wrap">
                <x-primary-button>Rápido</x-primary-button>

                <x-secondary-button>Mastigado</x-secondary-button>
            </div>
        </div>
    </div>
</x-modal>
