<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use App\Models\Endereco;
=======
>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Endereco::factory(10)->create();
    }
}
