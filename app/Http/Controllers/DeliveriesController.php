<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDeliveryRequest;
use App\Models\Delivery;

class DeliveriesController extends Controller
{
    public function store(StoreDeliveryRequest $request)
    {
        $delivery_hash = $request->validated();
        Delivery::create($delivery_hash);

        return redirect('dashboard')
            ->with('success', 'Entrega cadastrada com sucesso');
    }
}
