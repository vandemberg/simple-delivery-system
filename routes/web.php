<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->to('/dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/drivers', [DriversController::class, 'index'])->name('drivers');
    Route::get('/drivers/create', [DriversController::class, 'create'])->name('drivers.create');
    Route::get('/drivers/edit/{driver}', [DriversController::class, 'edit'])->name('drivers.edit');
    Route::patch('/drivers/update/{driver}', [DriversController::class, 'update'])->name('drivers.update');
    Route::post('/drivers/store', [DriversController::class, 'store'])->name('drivers.store');
    Route::delete('/drivers/{driver}', [DriversController::class, 'destroy'])->name('drivers.destroy');

    Route::get('/deliveries', [DeliveriesController::class, 'index'])->name('deliveries');
    Route::get('/customers', [CustomersController::class, 'index'])->name('customers');
});

require __DIR__.'/auth.php';
