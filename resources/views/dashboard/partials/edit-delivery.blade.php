<x-modal name="edit-delivery-{{$delivery->id}}">
    <div class="w-full p-8 pb-4">
        <div class="py-4">
            <p class="text-xl"><strong>Editar entrega</strong></p>
            @include('dashboard.form', ['delivery' => $delivery])
        </div>
    </div>
</x-modal>
