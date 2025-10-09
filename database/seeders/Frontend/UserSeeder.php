<?php

namespace Database\Seeders\Frontend;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $User = User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
