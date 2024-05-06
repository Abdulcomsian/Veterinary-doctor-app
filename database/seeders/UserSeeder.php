<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email'=> 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'phone' => '1231231243',
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'name' => 'nouman',
            'email'=> 'nouman@gmail.com',
            'password' => Hash::make('nouman123'),
            'phone' => '12312456546',
        ]);

        $user->assignRole('owner');

    }
}
