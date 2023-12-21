<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Todo;
use Illuminate\Database\Seeder;

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

        Todo::create([
            'description' => 'Milch kaufen',
        ]);

        Todo::create([
            'description' => 'Kinder ins Bett bringen',
        ]);

        Todo::create([
            'description' => 'Auto waschen',
        ]);

        Todo::create([
            'description' => 'Hühner füttern',
        ]);

        Todo::create([
            'description' => 'Teppich absaugen',
        ]);
    }
}
