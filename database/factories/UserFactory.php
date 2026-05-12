<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            'Patrick Rescarolli',
            'Alma Negra',
            'Zeca Urubu',
            'Nicolas Jackson',
            'Pedro Raul', 
            'Henrique Dentudinho', 
            'Fernando Mentiroso',
            'Mini ranhenta',
            'Vini choradeira', 
            'Dembele Bola de ouro',
            'Maikao',
            'Harry Kane injusticado',
            'Dick Vigarista', 
        ];

        return [
            'name' => $this->faker->randomElement($names),
            'email' => $this->faker->email(),
            'password' => 'password'
        ];
    }
}
