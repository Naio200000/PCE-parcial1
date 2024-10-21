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
        User::create([
            'name' => 'Diego',
            'email' => 'diego@gmail.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 0,
        ]);
        User::create([
            'name' => 'Fabian',
            'email' => 'fabian@gmail.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 0,
        ]);
        User::create([
            'name' => 'Ricardo',
            'email' => 'ricardo@gmail.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 0,
        ]);
        User::create([
            'name' => 'Jose',
            'email' => 'jose@gmail.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 0,
        ]);
        User::create([
            'name' => 'carlos',
            'email' => 'carlos@gmail.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 0,
        ]);
        User::create([
            'name' => 'Pedro',
            'email' => 'pedro@gmail.com',
            'password' => \Hash::make('Passw0rd'),
            'admin' => 0,
        ]);
    }
}