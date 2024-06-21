<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([

            'id' => 1,
            'name' => 'ropa'
        ]);
        Category::create([

            'id' => 2,
            'name' => 'equipos'
        ]);
        Category::create([

            'id' => 3,
            'name' => 'clases'
        ]);
        Category::create([

            'id' => 4,
            'name' => 'seminario'
        ]);
    }
}
