<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or update admin role  
        $adminRole = Role::updateOrCreate(
            ['slug' => 'admin'],
            [
                'name' => 'Admin',
                'slug' => 'admin'
            ]
        );

        // Create or update user role  
        $userRole = Role::updateOrCreate(
            ['slug' => 'user'],
            [
                'name' => 'User',
                'slug' => 'user'
            ]
        );

        // Create or update admin  
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'role_id'           => $adminRole->id,
                'name'              => 'Admin Emon Hossen',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make(12345678),
            ]
        );

        // Create or update user role  
        User::updateOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'role_id'           => $userRole->id,
                'name'              => 'User Emon Hossen',
                'email'             => 'user@gmail.com',
                'email_verified_at' => now(),
                'password'          => Hash::make(12345678),
            ]
        );
    }
}
