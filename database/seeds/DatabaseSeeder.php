<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->activarYdesactivarRelaciones([
            'type_documents',
            'education_nevels',
            'persons',
            'requests',
            'answers'
        ]);
        $this->call(TypeDocumentsSeeder::class);
        $this->call(EducationalLevelSeeder::class);
        $this->call(PersonsSeeder::class);
        $this->call(RequestSeeder::class);
        $this->call(AnswersSeeder::class);
    }

    public function activarYdesactivarRelaciones(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tablas as $itemTablas){
            DB::table($itemTablas)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
