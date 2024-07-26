<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([ // Cria um usuário de teste com um nome e email fake
            'name' => 'Usuário de teste',
            'email' => 'admin@gmail.com',
        ]);

        Candidate::factory(100)->create(); // cria candidatos na tabela candidates


    }
}
