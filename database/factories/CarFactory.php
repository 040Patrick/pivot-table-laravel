<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'name' => $this->faker->randomElement(['Corola', 'Marea', 'Ferrari', 'Fusquinha']),
            'modelo' => $this->faker->word(),
            'ano' => $this->faker->randomElement(['1994', '2004', '1999', '2020', '1968', '1987'])
        ];
    }
}
