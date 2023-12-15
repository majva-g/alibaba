<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Admin',
            'email' =>'admin@alibaba.ir',
            'password' => bcrypt('123456'),
            'is_admin' => 1
        ]);

        User::create([
            'name' => 'User',
            'email' =>'user@alibaba.ir',
            'password' => bcrypt('123456'),
        ]);
    }
}
