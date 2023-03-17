<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->superAdmin()->count(1)->create();
        User::factory()->admin()->count(5)->create();
        User::factory()->user()->count(10)->create();
    }
}
