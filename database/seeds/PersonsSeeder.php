<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $idTipoDocumento =  DB::select('select * from type_documents where id = ?', [1]);

       $idTipoDocumento2 =  DB::select('select * from type_documents where id = ?', [5]);

       $idTipoDocumento3 =  DB::select('select * from type_documents where id = ?', [3]);

       $idTipoDocumento4 =  DB::select('select * from type_documents where id = ?', [6]);

       $idTipoDocumento5 =  DB::select('select * from type_documents where id = ?', [9]);
     
       $idEducacion = DB::table('education_nevels')->select('id')->where('id',5)->first();

       $idEducacion1 = DB::table('education_nevels')->select('id')->where('id',1)->first();

       $idEducacion2 = DB::table('education_nevels')->select('id')->where('id',2)->first();

       $idEducacion3 = DB::table('education_nevels')->select('id')->where('id',6)->first();

       $idEducacion4 = DB::table('education_nevels')->select('id')->where('id',7)->first();
       $idEducacion5 = DB::table('education_nevels')->select('id')->where('id',3)->first();
    
      // dd($idEducacion->id);
         //tambien podemos realizar insert en forma de sentencia sql. con su respectivos marcadores para indicar la x posicion del campo
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento[0]->id, 
            'Duban',
            'Tovar',
            'Cra#23c-32',
            '312221242',
            'd@gmail.com',
            $idEducacion->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento4[0]->id, 
            'Maria',
            'Bernal',
            'Cra#23c-32',
            '311221242',
            'saw@gmail.com',
            $idEducacion1->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento2[0]->id, 
            'Pepa',
            'Popa',
            'Cra#23c-32',
            '312321242',
            'zsa@gmail.com',
            $idEducacion3->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento[0]->id, 
            'Chinchon',
            'chachin',
            'Cra#23c-32',
            '312231242',
            'dda2@gmail.com',
            $idEducacion2->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento3[0]->id, 
            'Polas',
            'Donato',
            'Cra#23c-32',
            '312223142',
            'ddsw@gmail.com',
            $idEducacion->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento5[0]->id, 
            'Pepito',
            'Perez',
            'Cra#42c-23',
            '318223142',
            'dpepidsw@gmail.com',
            $idEducacion4->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento2[0]->id, 
            'Andres',
            'Felipe',
            'Cra#21-4C',
            '316423142',
            'felipeA@gmail.com',
            $idEducacion->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento5[0]->id, 
            'Leonardo',
            'Lugo',
            'Cra#2c-23',
            '313213142',
            'LugitoXe@gmail.com',
            $idEducacion->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento4[0]->id, 
            'Pepa',
            'Peperris',
            'Cra#1c-66',
            '311113142',
            'dPepa@gmail.com',
            $idEducacion5->id
        ]);
        DB::insert('insert into persons (typedocuments_id,name,surname,address,phone,email,educationnevels_id) values (?, ?, ?, ?, ?, ?, ?)', [
            $idTipoDocumento3[0]->id, 
            'Wilson',
            'Tovar',
            'Cra#32c-12',
            '313223142',
            'd2a@gmail.com',
            $idEducacion->id
        ]);
        
    }
}
