<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TypeDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('education_nevels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('persons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('typedocuments_id');
            $table->foreign('typedocuments_id')->references('id')->on('type_documents');
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->unsignedBigInteger('educationnevels_id');
            $table->foreign('educationnevels_id')->references('id')->on('education_nevels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
        Schema::dropIfExists('education_nevel');
        Schema::dropIfExists('type_documents');
        
    }
}
