<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;


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
        // User::factory(10)->create();

        //Users
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password'=> Hash::make('12345678'),
            'role'=> 'admin',

        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password'=> Hash::make('12345678'),
            'role'=> 'user',

        ]);
    }
}
