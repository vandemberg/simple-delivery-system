<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delivery;

class DashboardController extends Controller
{
    public function timeline()
    {
        $customers = Customer::all();
        $deliveries = Delivery::paginate(10);
        $delivery = new Delivery();

        $lateDeliveries = Delivery::all()->where('delivery_at', '<', date('Y-m-d'))
            ->whereIn('status', Delivery::OPEN_STATUS);

        return view('dashboard.list')
            ->with('deliveries', $deliveries)
            ->with('customers', $customers)
            ->with('delivery', $delivery)
            ->with('lateDeliveries', $lateDeliveries);
    }
}
