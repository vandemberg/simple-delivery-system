<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delivery;

class DashboardController extends Controller
{
    public function timeline()
    {
        $customers = Customer::all();
        $deliveries = Delivery::all();

        return view('dashboard.list')
            ->with('deliveries', $deliveries)
            ->with('customers', $customers);
    }
}
