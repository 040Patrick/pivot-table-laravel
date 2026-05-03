<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = $this->faker->randomElement(['active', 'paused', 'completed']);

        return [

            // Strings
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),

            // Enum
            'status' => $status,

            // Data
            'started_at' => now(),
            'finished_at' =>  $status === 'completed' ? (clone now())->addDays(rand(5, 10)) : null,
        ];
    }
}
