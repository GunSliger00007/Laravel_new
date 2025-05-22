<?php

namespace Database\Seeders;

use App\Models\Category;
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
         //User::factory(10)->create();

       // User::factory()->create([
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
        category::create([
            'title' => 'Electronics',
            'slug' => 'electronics',
            'rank'=>1,
            'description'=>'Electronics is very easy to use.',
            'status'=>1
        ]);
    }
}
