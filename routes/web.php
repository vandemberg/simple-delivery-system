<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get(
        '/',
        function () {
            return redirect()->to('/dashboard');
        }
    );

    Route::get('/dashboard', [DashboardController::class, 'timeline'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/drivers', [DriversController::class, 'index'])->name('drivers');
    Route::get('/drivers/create', [DriversController::class, 'create'])->name('drivers.create');
    Route::get('/drivers/edit/{driver}', [DriversController::class, 'edit'])->name('drivers.edit');
    Route::patch('/drivers/update/{driver}', [DriversController::class, 'update'])->name('drivers.update');
    Route::post('/drivers/store', [DriversController::class, 'store'])->name('drivers.store');
    Route::delete('/drivers/{driver}', [DriversController::class, 'destroy'])->name('drivers.destroy');

    Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
    Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.create');
    Route::post('/customers/store', [CustomersController::class, 'store'])->name('customers.store');
    Route::get('/customers/edit/{customer}', [CustomersController::class, 'edit'])->name('customers.edit');
    Route::patch('/customers/update/{customer}', [CustomersController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{customer}', [CustomersController::class, 'destroy'])->name('customers.destroy');

    Route::post('/deliveries/store', [DeliveriesController::class, 'store'])->name('deliveries.store');
});

require __DIR__ . '/auth.php';
