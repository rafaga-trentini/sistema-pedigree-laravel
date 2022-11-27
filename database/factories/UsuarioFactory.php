<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->words(2, true),
            "username" => $this->faker->words(2, true),
            "senha" => $this->faker->words(2, true),
            "isCanil" => $this->faker->words(2, true),
        ];
    }
}
