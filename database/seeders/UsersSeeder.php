<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Mahesa Nabil",
            "email" => "mahesa@gmail.com",
            "password" => Hash::make("12345678")
        ]);

        User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("12345678")
        ])->assignRole("admin");
    }
}
