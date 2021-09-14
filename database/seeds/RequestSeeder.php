<?php

use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>1, 'description'=>'Profesional autonomo']);
        
        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>2, 'description'=>'Profesional Unico']);

        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>3, 'description'=>'Profesional Mamadisimo']);

        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>4, 'description'=>'Profesional Loquito']);

        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>5, 'description'=>'Profesional artes']);

        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>6, 'description'=>'Profesional ventas']);

        
        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>7, 'description'=>'Profesional Pro del 7']);


        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>8, 'description'=>'Profesional software']);

        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>9, 'description'=>'Profesional Pro']);
        
        DB::insert('insert into requests (persons_id,description) values (:persons_id, :description)', ['persons_id'=>10, 'description'=>'Profesional Que ayuda al pro']);
    }
}
