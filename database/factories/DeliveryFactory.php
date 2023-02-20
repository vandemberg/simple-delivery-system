<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Delivery;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => fake()->company(),
            'address' => fake()->streetAddress(),
            'CEP' => $this->randomCEP(),
            'customer_id' => Customer::inRandomOrder()->limit(3)->first(),
            'driver_id' => Driver::inRandomOrder()->limit(3)->first(),
            'status' => $this->status(),
            'delivery_at' => $this->withDate() ? fake()->date() : null,
        ];
    }

    public function randomCEP($prefix = '55000-'): string
    {
        $cep = $prefix;

        for ($i = 0; $i < 3; $i++) {
            $digit = fake()->randomDigit();
            $cep = $cep . $digit;
        }

        return $cep;
    }

    public function status(): string
    {
        $random_index = array_rand(Delivery::VALID_STATUS);
        return Delivery::VALID_STATUS[$random_index];
    }

    public function withDate(): bool
    {
        $with_date = [true, false];
        $random_index = array_rand($with_date);
        return $with_date[$random_index];
    }
}
