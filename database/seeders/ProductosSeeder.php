<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'id' => 1,
                'name' => '1 Clase grupal',
                'descript' => 'Disfruta de una clase por semana en los días que ...',
                'image' => '1700660324.webp',
                'category' => 'clase',
                'price' => '700000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Iaidogi Azul',
                'descript' => 'Keikogi para entrenamiento, 100% Tetron; Elaborado...',
                'image' => '1700594250.webp',
                'category' => 'ropa',
                'price' => '500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Bokuto',
                'descript' => 'Katana de madera para entrenamiento, con saya de p...',
                'image' => 'bokuto-01.webp',
                'category' => 'equipos',
                'price' => '2000000',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
