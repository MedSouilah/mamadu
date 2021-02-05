<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_personnel');
            $table->string('prenom_personnel');
            $table->string('adresse_personnel');
            $table->string('ville');
            $table->string('pays');
            $table->integer('codezip')->nullable();
            $table->string('nationalite');
            $table->string('cin');
            $table->string('situation_familiale'); 
            $table->string('metier'); 
            $table->string('sex');
            $table->string('dateibn')->nullable(); 
            $table->integer('codeibn')->nullable(); 
            $table->integer('kids')->default('0');
            $table->integer('idibn')->nullable(); 
            $table->string('typecncc')->nullable(); 
            $table->integer('idcncc')->nullable(); 
            $table->string('photo')->nullable(); 
            $table->string('adresse_naissance');
            $table->string('date_naissance');
            $table->string('ville_naissance');  
            $table->integer('tel')->nullable();        
            $table->string('email')->nullable();
            $table->biginteger('user_id');
            $table->string('is_valid')->default('non');
            $table->integer('id_archivedata'); 
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
        Schema::dropIfExists('profiles');
    }
}
