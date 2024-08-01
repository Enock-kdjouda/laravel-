<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Author::create([
            'name' => 'Enock Djoudas',
            'biography' => ' PDG de Djoudas Holding'
        ]);

        Author::create([
            'name' => 'Savas Sargun',
            'biography' => 'PDG de Sargun Holding'
        ]);

        Author::create([
            'name' => 'Alberto Salavatierra',
            'biography' => 'PDG de Salavatierra'
        ]);

        Author::create([
            'name' => 'Juan Del Monte',
            'biography' => 'PDG de Del Monte'
        ]);

    }
}
