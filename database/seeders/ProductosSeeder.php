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
                'descript' => 'Disfruta de una clase por semana en los días que prefieras. ; Te invitamos a participar una clase semanal para el uso de la katana japonesa (esgrima samurai). En la misma podrás ver los fundamentos básicos de uso de la katana japonés. Todo el material lo provee el dojo, solo necesitas ropa cómoda.',
                'image' => '1700660324.webp',
                'altImage' => 'Baner de clases de Iaido',
                'category' => 'clase',
                'price' => '700000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Iaidogi Azul',
                'descript' => 'Keikogi para entrenamiento, 100% Tetron. ; Elaborado en tetron: 65% poliéster +35% rayon, esta chaqueta está especialmente diseñada para la práctica de iaido. No achica, no pierde color y es fácil de mantener.',
                'image' => '1700594250.webp',
                'altImage' => 'Chaqueta azul de entrenamiento',
                'category' => 'ropa',
                'price' => '500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Bokuto',
                'descript' => 'Katana de madera para entrenamiento, con saya de plastico; Una katanas hechas de madera es bokuto (literalmente espada de madera). tallada en diversas maderas para mejorar su relación con el peso',
                'image' => 'bokuto-01.webp',
                'altImage' => 'Bokkuto con Saya',
                'category' => 'equipos',
                'price' => '2000000',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
