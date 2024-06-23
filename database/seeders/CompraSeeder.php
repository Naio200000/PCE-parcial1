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
                'producto_id' => 2,
            ],
            [
                'user_id' => 2,
                'producto_id' => 3,
            ],
            [
                'user_id' => 1,
                'producto_id' => 2,
            ],
            [
                'user_id' => 1,
                'producto_id' => 3,
            ],
        ]);
    }
}
