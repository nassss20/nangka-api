<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Creates permanent admin account
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'serid5@gmail.com', 
            'password' => Hash::make('admin'), 
        ]);
    }
}