<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            EstadoSeeder::class,
            CidadeSeeder::class,
<<<<<<< HEAD
            RacaSeeder::class,
            TipoSeeder::class,
            AnimalSeeder::class,
            UsuarioSeeder::class,
=======
            TipoSeeder::class,
            AnimalSeeder::class,


>>>>>>> 1ccdd1141b9ad2f9a7d19614779fbab132c547eb
            EnderecoSeeder::class,
        ]);
    }
}
