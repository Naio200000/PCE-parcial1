<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compras')->insert([
            [
                'user_id' => 2,
                'producto_id' => 1,
            ],
            [
                'user_id' => 2,
                'producto_id' => 13,
            ],
            [
                'user_id' => 2,
                'producto_id' => 4,
            ],
            [
                'user_id' => 1,
                'producto_id' => 16,
            ],
            [
                'user_id' => 1,
                'producto_id' => 5,
            ],
        ]);
    }
}
