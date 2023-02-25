<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDeliveryRequest;
use App\Http\Requests\UpdateDeliveryRequest;
use App\Models\Delivery;

class DeliveriesController extends Controller
{
    public function store(StoreDeliveryRequest $request)
    {
        $delivery_hash = $request->validated();
        Delivery::create($delivery_hash);

        return response()->json([
            'success' => true,
        ]);
    }

    public function update(UpdateDeliveryRequest $request, Delivery $delivery)
    {
        $delivery->update($request->validated());

        return response()->json([
            "success" => true,
        ], 200);
    }
}
