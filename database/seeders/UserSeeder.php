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
            'name' => 'admin',
            'email' => 'admin@komei.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 1,
        ]);
        User::create([
            'name' => 'naio',
            'email' => 'naio@gmail.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 0,
        ]);
    }
}