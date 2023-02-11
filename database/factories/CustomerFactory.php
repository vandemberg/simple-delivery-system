<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'address' => fake()->streetAddress(),
            'neighbourhood' => fake()->streetName(),
            'city' => fake()->city(),
            'CEP' => $this->randomCEP(),

        ];
    }

    public function randomCEP($prefix = '5500-')
    {
        $cep = $prefix;

        for ($i = 0; $i < 3; $i++) {
            $digit = fake()->randomDigit();
            $cep = $cep . $digit;
        }

        return $cep;
    }
}
