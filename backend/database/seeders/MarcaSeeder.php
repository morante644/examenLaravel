<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marcas')->insert([
            [
                'nombre'=>'hp',
                'descripcion'=>'importado',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nombre'=>'dell',
                'descripcion'=>'importado',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
            ]);
    }
}
