<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveriesController extends Controller
{
    public function index()
    {
        $deliveries = [];

        return view('deliveries.index')
            ->with('deliveries', $deliveries);
    }
}
