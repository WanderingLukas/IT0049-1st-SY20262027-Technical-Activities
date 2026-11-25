<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'Lukexander',
            'full_name' => 'Lukexander Virgilius P. De Guzman',
            'email' => 'LukeDaDeveloper@gmail.com',
        ]);
    }
}
