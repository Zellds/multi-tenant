<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'João',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Maria',
            'email' => 'user2@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Pedro',
            'email' => 'user3@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Paulo',
            'email' => 'user4@example.com',
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Roger',
            'email' => 'user5@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

