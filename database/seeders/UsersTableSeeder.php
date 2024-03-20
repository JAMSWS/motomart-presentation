<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the first user
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create the second user
        User::create([
            'name' => 'John2 Doe',
            'email' => 'john2@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create the third user
        User::create([
            'name' => 'John3 Doe',
            'email' => 'john3@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
