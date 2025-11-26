<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class InitialUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        // seed company-owner 1
        User::create([
            "name" => "Marwan-ORD",
            "email" => "marwan@test.com",
            "password" => Hash::make("123456789"),
            "role" => "company-owner",
            "email_verified_at" => now(),
        ]);

        // seed company-owner 2
        User::create([
            "name" => "Alami-Owner",
            "email" => "alami@test.com",
            "password" => Hash::make("123456789"),
            "role" => "company-owner",
            "email_verified_at" => now(),
        ]);

    }

}
