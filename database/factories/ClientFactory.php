<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(), 
            'phone' => $faker->phoneNumber(),
            'address' => $faker->streetAddress()
        ];
    }
}
