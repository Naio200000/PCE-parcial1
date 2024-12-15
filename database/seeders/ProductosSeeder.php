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
                'descript' => 'Disfruta de una clase por semana en los días que prefieras    ;     Te invitamos a participar una clase semanal para el uso de la katana japonesa (esgrima samurai). En la misma podrás ver los fundamentos básicos de uso de la katana japonés. Todo el material lo provee el dojo, solo necesitas ropa cómoda.',
                'image' => 'img/productos/1700660241.webp',
                'altImage' => '',
                'category_id' => 3,
                'price' => '700000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => '2 Clase grupal',
                'descript' => 'Disfruta de dos clase por semana en los días que prefieras; Te invitamos a participar dos clase semanal para el uso de la katana japonesa (esgrima samurai). En la misma podrás ver los fundamentos básicos de uso de la katana japonés. Todo el material lo provee el dojo, solo necesitas ropa cómoda.',
                'image' => 'img/productos/1700660241.webp',
                'altImage' => '',
                'category_id' => 3,
                'price' => '800000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => '3 Clase grupal',
                'descript' => 'Disfruta de dos clase por semana en los días que prefieras; Te invitamos a participar dos clase semanal para el uso de la katana japonesa (esgrima samurai). En la misma podrás ver los fundamentos básicos de uso de la katana japonés. Todo el material lo provee el dojo, solo necesitas ropa cómoda.',
                'image' => 'img/productos/1700660285.webp',
                'altImage' => '',
                'category_id' => 3,
                'price' => '900000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Iaidogi Azul',
                'descript' => 'Keikogi para entrenamiento, 100% Tetron; Elaborado en tetron: 65% poliéster +35% rayon, esta chaqueta está especialmente diseñada para la práctica de iaido. No achica, no pierde color y es fácil de mantener.',
                'image' => 'img/productos/1700594250.webp',
                'altImage' => '',
                'category_id' => 1,
                'price' => '500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Obi de Ceda',
                'descript' => 'Elegante Cintuon de Ceda ;  Elaborado en ceda de alta calidad con dimenciones de 15cm de ancho y 4 metros de largo',
                'image' => 'img/productos/1700709418.webp',
                'altImage' => '',
                'category_id' => 1,
                'price' => '500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Hakama',
                'descript' => 'Hakama para entrenamiento, 100% Tetron; Excelentes hakamas de tetrón para el entrenamiento de iaido, kendo, aikido y demas artes marciales. Tela antiarrugas con una composición de 65% poliester y 35% de rayón que asegura la permanencia de las tablas sin mayor esfuerzo de planchado. Elaboradas a mano y cosidas individualmente.',
                'image' => 'img/productos/hakama-02.webp',
                'altImage' => '',
                'category_id' => 1,
                'price' => '600000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'Shinken Premuim',
                'descript' => 'Katana de entenamiento con filo, Hecha en acero 1095; Una katanas hechas de manera tradicional es nihonto (literalmente "espada japonesa"). forjada a partir de acero tamahagane.',
                'image' => 'img/productos/katana-01.webp',
                'altImage' => '',
                'category_id' => 2,
                'price' => '6000000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'Iaito',
                'descript' => 'Katana de entenamiento sin filo, hecha dealeacion de Aluminio; Una katanas hechas de manera moderna es mugito (literalmente "espada de exhhibición"). forjada a partir de una aleación de aluminio.',
                'image' => 'img/productos/1700660964.webp',
                'altImage' => '',
                'category_id' => 2,
                'price' => '4500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'Bokuto',
                'descript' => 'Katana de madera para entrenamiento, con saya de plastico; Una katanas hechas de madera es bokuto (literalmente "espada de madera"). tallada en diversas maderas para mejorar su relación con el peso',
                'image' => 'img/productos/elHO3Ocmr10PCvnZHvJ2ZXPKB7n8vcwA8156UMs6.webp',
                'altImage' => '',
                'category_id' => 2,
                'price' => '2000000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'Hakama de Gala',
                'descript' => 'Hakama para exibicion, 100% Lana; Excelentes hakamas de Lana para seremoñas o exibiciones de iaido, aikido y demas artes marciales. 100% Hilos de lana Mercerizada con un patron a rayas. Elaboradas a mano y cosidas individualmente.',
                'image' => 'img/productos/hakama-gala-01.webp',
                'altImage' => '',
                'category_id' => 1,
                'price' => '1400000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'name' => 'Montsuki',
                'descript' => 'Hakama para exibicion, 100% Lana; Excelentes hakamas de Lana para seremoñas o exibiciones de iaido, aikido y demas artes marciales. 100% Hilos de lana Mercerizada con un patron a rayas. Elaboradas a mano y cosidas individualmente.',
                'image' => 'img/productos/montsuki-01.webp',
                'altImage' => '',
                'category_id' => 1,
                'price' => '1700000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'name' => 'Setta',
                'descript' => 'Katana de madera para entrenamiento, con saya de plastico; Una katanas hechas de madera es bokuto (literalmente espada de madera). tallada en diversas maderas para mejorar su relación con el peso',
                'image' => 'img/productos/setta-02.webp',
                'altImage' => '',
                'category_id' => 1,
                'price' => '800000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'name' => 'Shinken',
                'descript' => 'Sandalia de Igusa y Algodón; Setta es una fina y elegante sandalia japonesa hecha de Igusa, una planta utilizada para hacer tatamis tradicionales, y una tira de algodón mullido',
                'image' => 'img/productos/1700660784.webp',
                'altImage' => '',
                'category_id' => 2,
                'price' => '4500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'name' => '1 clase de Seminario',
                'descript' => 'Disfruta de 1 clase en nuestro seminario anual con Sekiguchi Sensei; Te invitamos a participar una clase de nuestro seminario de 3 dias con Sekiguchi Sensei, que nos visita una vez al año. Recivimos a Sensei con una gran seminario.',
                'image' => 'img/productos/1700660324.webp',
                'altImage' => '',
                'category_id' => 4,
                'price' => '500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 15,
                'name' => 'Iaidogi Negro',
                'descript' => 'Keikogi para entrenamiento, 100% Tetron; Elaborado en tetron: 65% poliéster +35% rayon, esta chaqueta está especialmente diseñada para la práctica de iaido. No achica, no pierde color y es fácil de mantener.',
                'image' => 'img/productos/keikogi-n-01.webp',
                'altImage' => '',
                'category_id' => 1,
                'price' => '900000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 16,
                'name' => '1 Clase personal',
                'descript' => 'Disfruta clase personal una vez por semana en los días que prefieras; Te invitamos a participar de 1 clase personales por semana para aprender el uso de la katana japonesa (esgrima samurai). En la misma podrás ver los fundamentos básicos de uso de la katana japonés. Todo el material lo provee el dojo, solo necesitas ropa cómoda.',
                'image' => 'img/productos/1700593128.webp',
                'altImage' => '',
                'category_id' => 3,
                'price' => '1100000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 17,
                'name' => '2 Clases personales',
                'descript' => 'Disfruta de 2 clases personales por semana en los días que prefieras; Te invitamos a participar de 3 clases personales por semana para aprender el uso de la katana japonesa (esgrima samurai). En la misma podrás ver los fundamentos básicos de uso de la katana japonés. Todo el material lo provee el dojo, solo necesitas ropa cómoda.',
                'image' => 'img/productos/1700660039.webp',
                'altImage' => '',
                'category_id' => 3,
                'price' => '1300000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 18,
                'name' => '3 Clases personales',
                'descript' => 'Disfruta de 3 clase personales por semana en los días que prefieras; Te invitamos a participar de 3 clases personales por semana para aprender el uso de la katana japonesa (esgrima samurai). En la misma podrás ver los fundamentos básicos de uso de la katana japonés. Todo el material lo provee el dojo, solo necesitas ropa cómoda.',
                'image' => 'img/productos/1700660207.webp',
                'altImage' => '',
                'category_id' => 3,
                'price' => '2000000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 19,
                'name' => '2 clases de Seminario',
                'descript' => 'Disfruta de 2 clase en nuestro seminario anual con Sekiguchi Sensei; Te invitamos a participar de 2 clases de nuestro seminario de 3 dias con Sekiguchi Sensei, que nos visita una vez al año. Recivimos a Sensei con una gran seminario.',
                'image' => 'img/productos/1700660346.webp',
                'altImage' => '',
                'category_id' => 4,
                'price' => '2500000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 20,
                'name' => '3 clases de Seminario',
                'descript' => 'Disfruta de 3 clases en nuestro seminario anual con Sekiguchi Sensei; Te invitamos a participar de nuestro seminario completo de 3 dias con Sekiguchi Sensei, que nos visita una vez al año. Recivimos a Sensei con una gran seminario.',
                'image' => 'img/productos/1700660363.webp',
                'altImage' => '',
                'category_id' => 4,
                'price' => '2000000',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 21,
                'name' => 'Obi de algodón',
                'descript' => 'Disfruta de 3 clases en nuestro seminario anual con Sekiguchi Sensei; Te invitamos a participar de nuestro seminario completo de 3 dias con Sekiguchi Sensei, que nos visita una vez al año. Recivimos a Sensei con una gran seminario.',
                'image' => 'img/productos/obi-01.webp',
                'altImage' => '',
                'category_id' => 2,
                'price' => '300000',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
