<?php

use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            1, 
            'Chinos pro de primero',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            2, 
            'Chinos pro de segundo',
            'Prueba prueba `rubea',
        ]);
        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            3, 
            'Chinos pro de tercero',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            4, 
            'Chinos pro de cuarto',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            5, 
            'Chinos pro de quinto',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            6, 
            'Chinos pro de sexto',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            7, 
            'Chinos pro de septimo',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            8, 
            'Chinos pro de octavo',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            9, 
            'Chinos pro de noveno',
            'Prueba prueba `rubea',
        ]);

        DB::insert('insert into answers (request_id,description,observation) values (?, ?, ?)', [
            10, 
            'Chinos pro de decimo ',
            'Prueba prueba `rubea',
        ]);
       
    }
}
