<?php

namespace Database\Factories;
<<<<<<< HEAD
use App\Models\Animal;
use App\Models\Tipo;
use App\Models\Raca;


=======
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
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
            "chip" => $this->faker->regexify('[0-9]{3}'),
            "foto" => $this->faker->words(2, true),
            "pais_origem" => $this->faker->words(2, true),
            "data_nascimento" => $this->faker->regexify('[0-9]{6}'),
            "tipo_id" => Tipo::all()->random()->id,
            "raca_id" => Raca::all()->random()->id,
<<<<<<< HEAD
=======
            "pai" => Aniamal::all()->random()->id,
            "mae" => Animal::all()->random()->id,
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb
        ];
    }
}
