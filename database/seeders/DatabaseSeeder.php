<?php

namespace Database\Seeders;
use App\Models\Tutor;
use App\Models\TypeClass;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

       Tutor::factory(5)->create();
       TypeClass::factory(5)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}