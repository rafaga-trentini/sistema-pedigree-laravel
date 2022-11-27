<?php

namespace Database\Factories;
<<<<<<< HEAD
use App\Models\Estado;
=======
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cidade>
 */
class CidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "descricao" => $this->faker->words(2, true),
            "estado_id" => Estado::all()->random()->id
        ];
    }
}
