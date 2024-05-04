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
                'altImage' => 'Baner de clases de Iaido',
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
                'altImage' => 'Chaqueta azul de entrenamiento',
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
                'altImage' => 'Bokkuto con Saya',
                'category' => 'equipos',
                'price' => '2000000',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        DB::table('blogs')->insert([
            [
                'id' => 1,
                'title' => 'Explorando la Profundidad del Iaido: Un Arte Marcial de Precisión y Serenidad',
                'image' => 'komei-juku-hero-4.webp',
                'altImage' => 'una descripcion',
                'blog' => 'El Iaido, un arte marcial japonés con raíces históricas profundas, se destaca como una práctica que fusiona la precisión técnica con la calma interior. En su esencia, el Iaido no se trata simplemente de dominar movimientos rápidos y precisos con la espada, sino que también busca cultivar la mente y el espíritu del practicante.

                Este arte se centra en el manejo de la katana, la espada japonesa, y se enfoca en la ejecución fluida y eficiente de movimientos diseñados para enfrentar situaciones de combate repentino. Sin embargo, más allá de la destreza física, el Iaido fomenta la concentración mental y la presencia en el momento presente. Los practicantes aprenden a mantener la calma y la claridad mental incluso en las situaciones más desafiantes, desarrollando así una conexión profunda entre el cuerpo y la mente.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Explorando la Elegancia del Iaido: Una Exhibición de Maestría y Espíritu',
                'image' => 'komei-juku-hero-3.webp',
                'altImage' => 'una descripcion',
                'blog' => 'Los invitamos a sumergirse en la gracia y la destreza del Iaido en nuestra próxima exhibición. En este evento único, presenciarán la ejecución magistral de movimientos fluidos y precisos con la katana, cada uno cargado de historia y significado. Desde las reverencias ceremoniales hasta los cortes rápidos y poderosos, cada gesto refleja la profunda conexión entre el cuerpo, la mente y el espíritu. Esta exhibición no solo celebra la habilidad física, sino también la disciplina interior y la serenidad en medio de la acción, invitándolos a explorar la belleza y la profundidad del Iaido en una experiencia que cautiva los sentidos y alimenta el alma.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Explorando las Raíces del Iaido: Un Viaje Transformador a Japón',
                'image' => 'komei-juku-hero-2.webp',
                'altImage' => 'una descripcion',
                'blog' => '¿Alguna vez has soñado con sumergirte en la cultura y la tradición japonesas mientras te sumerges en el arte ancestral del Iaido? ¡Entonces este viaje es para ti! Te invitamos a embarcarte en una experiencia única que te llevará a las profundidades del corazón de Japón para entrenar y perfeccionar tus habilidades en este noble arte marcial.

                Imagina despertarte cada mañana en tierras impregnadas de historia, rodeado de paisajes pintorescos y una atmósfera cargada de espiritualidad. Desde antiguos templos hasta escuelas de artes marciales tradicionales, tendrás la oportunidad de aprender de maestros expertos que han dedicado sus vidas al estudio y la práctica del Iaido.

                Este viaje no solo te permitirá mejorar tus habilidades técnicas, sino que también te sumergirá en la filosofía y la mentalidad detrás del Iaido. Aprenderás a cultivar la disciplina, la concentración y la serenidad mientras te sumerges en la rica tradición de este arte marcial. ¡Prepárate para una experiencia transformadora que te dejará con recuerdos inolvidables y una profunda apreciación por la belleza y la profundidad del Iaido!',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }


}
