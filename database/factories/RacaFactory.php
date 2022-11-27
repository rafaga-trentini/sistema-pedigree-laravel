<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Raca>
 */
class RacaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "raca" => $this->faker->words(2, true),
            "cor" => $this->faker->words(1, true),
            "sexo" => $this->faker->words(1, true),
        ];
    }
}
