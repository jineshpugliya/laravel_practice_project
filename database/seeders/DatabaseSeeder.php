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
        $this->call([
            CategorySeeder::class,
            UserSeeder::class

        ]); 
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\Category::create([
        //     'name' => "ELE",
        //     'description' => "This is electronic"
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
