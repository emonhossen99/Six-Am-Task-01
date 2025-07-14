<?php

namespace Database\Seeders;

use Database\Seeders\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Inset in to admin and user using UsersSeeder
        $this->call([
            UsersSeeder::class,
        ]);
    }
}
