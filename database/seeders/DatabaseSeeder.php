<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use App\Models\Delivery;
use App\Models\User;
use App\Models\Driver;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (User::all()->count() == 0) {
            User::factory(10)->create();
        }

        if (Driver::all()->count() == 0) {
            Driver::factory(10)->create();
        }

        if (Customer::all()->count() == 0) {
            Customer::factory(10)->create();
        }


        Delivery::factory(10)->create();
    }
}
