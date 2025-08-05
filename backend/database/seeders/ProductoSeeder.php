<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'idmarca'=>'1',
                'nombre'=>'teclado',
                'descripcion'=>'mecanico',
                'precio'=>'500 Bs',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'idmarca'=>'1',
                'nombre'=>'mouse',
                'descripcion'=>'inalambrico',
                'precio'=>'150 Bs',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'idmarca'=>'2',
                'nombre'=>'teclado',
                'descripcion'=>'membrana',
                'precio'=>'100 Bs',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'idmarca'=>'2',
                'nombre'=>'monitor',
                'descripcion'=>'24 pulgadas',
                'precio'=>'1500 Bs',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'idmarca'=>'2',
                'nombre'=>'estabilizador',
                'descripcion'=>'estabilizador de tension automatico',
                'precio'=>'800 Bs',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
            ]);
    }
}
