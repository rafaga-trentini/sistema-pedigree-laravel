<?php

namespace Database\Factories;
<<<<<<< HEAD
use App\Models\Usuario;
use App\Models\Cidade;

=======
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "endereco" => $this->faker->words(2, true),
            "numero" => $this->faker->regexify('[0-9]{3}'),
            "cep" => $this->faker->regexify('[0-9]{8}'),
            "bairro" => $this->faker->words(2, true),
            "complemento" => $this->faker->words(2, true),
            "cidade_id" => Cidade::all()->random()->id,
            "usuario_id" => Usuario::all()->random()->id,
        ];
    }
}
