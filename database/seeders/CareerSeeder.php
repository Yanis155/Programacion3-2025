<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('careers')->insert([
            'name'=> 'Analista en sistemas',
            'duration'=> '3 años',
            'description'=> 'Tecnico superior en analisis y diseño de Software'
        ]);
        DB::table('careers')->insert([
            'name'=> 'Diseñador Grafico',
            'duration'=> '3 años',
            'description'=> '',
        ]);
        DB::table('careers')->insert([
            'name'=> 'Ingeniero en sistemas',
            'description'=> '',
        ]);
        DB::table('careers')->insert([
            'name'=> 'Profesor de matemáticas',
            'description'=> '',
        ]);
        DB::table('careers')->insert([
            'name'=> 'Abogacia',
            'description'=> '',
        ]);
    }
}
