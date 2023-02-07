<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriversController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.drivers')
            ->with('drivers', $drivers);
    }

    public function create()
    {
        return view('drivers.create')
            ->with('driver', new Driver());
    }

    public function store(Request $request)
    {
        $validatedDriver = $request->validate([
            'name' => 'required|unique:drivers|max:255|min:3',
            'phone' => 'required|unique:drivers|size:15',
        ]);

        $driver = new Driver();
        $driver->fill($validatedDriver);
        $driver->save();

        return redirect()->route('drivers')
            ->with('success', 'Motorista cadastrado com sucesso');
    }

    public function edit(Driver $driver)
    {
        return view('drivers.edit')
            ->with('driver', $driver);
    }

    public function update(Request $request, Driver $driver)
    {
        $validatedDriver = $request->validate([
            'name' => 'required|max:255|min:3',
            'phone' => 'required|size:15',
        ]);

        $driver->fill($validatedDriver);
        $driver->save();

        return redirect()->back()->with('driver', $driver);
    }

    public function destroy(Driver $driver)
    {
        $driverName = $driver->name;
        $driver->delete();

        return redirect()
            ->route('drivers')
            ->with('success', "Motorista {$driverName} removido com sucesso");
    }
}
