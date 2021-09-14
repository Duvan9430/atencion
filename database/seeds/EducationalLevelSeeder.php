<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationalLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_nevels')->insert([
            'name'=>'Preescolar'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Cinco Grado 1,2,3,4 y 5'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Cuarto Grado 6,7,8 y 9'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Dos grados 10 y 11'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Universitaria'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Universitaria Bachiller'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Universitaria Prueba'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Secundaria de prueba'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Primaria de prueba'
        ]);
        DB::table('education_nevels')->insert([
            'name'=>'Primaria de prueba'
        ]);
        //
    }
}
