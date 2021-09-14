<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //forma array asociativo 
        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'C.C','description' =>'Cedula ciudadania']);
     
        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'T.I', 'description'=>'Tarjeta Identidad']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'Pasaporte', 'description'=>'Pasaporte']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'T.E', 'description'=>'Tarjeta de extranjería']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'C.E', 'description'=>'Cédula de extranjería']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'C.O', 'description'=>'Cédula de ortoponcia']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'T.M', 'description'=>'Tarjeta de militar']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'C.S', 'description'=>'Cédula de social']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'T.A', 'description'=>'Tarjeta de adiconal']);

        DB::insert('insert into type_documents (code,description) values (:code, :description)', ['code'=>'M.C', 'description'=>'Migracion Colombia']);
        /*
        //insertamos mediante el contructor de laravel
        DB::table('type_documents')->insert([
            'code'=>'C.C',
            'description'=>'Cedula Ciudadania'
        ]);
        DB::table('type_documents')->insert([
            'code'=>'T.I',
            'description'=>'Tarjeta Identidad'
        ]);
        DB::table('type_documents')->insert([
            'code'=>'Pasaporte',
            'description'=>'Pasaporte'
        ]);
        DB::table('type_documents')->insert([
            'code'=>'T.E',
            'description'=>'Tarjeta de extranjería'
        ]);
        DB::table('type_documents')->insert([
            'code'=>'C.E',
            'description'=>'Cédula de extranjería'
        ]);
        */
    }
}
