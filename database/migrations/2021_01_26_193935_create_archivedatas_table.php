<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivedatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivedatas', function (Blueprint $table) {
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
        $table->integer('number_kids')->nullable();
        $table->string('metier'); 
        $table->string('sex');  
        $table->string('adresse_naissance');
        $table->string('ville_naissance');  
        $table->integer('tel')->nullable(); 
        $table->integer('id_archivedata')->nullable();        
        $table->string('email')->nullable();
        $table->string('dateibn')->nullable(); 
        $table->integer('codeibn')->nullable(); 
        $table->integer('idibn')->nullable(); 
        $table->string('typecncc')->nullable(); 
        $table->integer('idcncc')->nullable(); 
        $table->string('nom_pere');
        $table->string('prenom_pere');
        $table->string('nom_mere');
        $table->string('prenom_mere');  
        $table->string('bureau_nom');  
        $table->string('province');  
        $table->string('communaute');  
        $table->string('date_de_create');  
        $table->string('date_fin');  
        $table->string('photo')->nullable();  
        $table->rememberToken();
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
        Schema::dropIfExists('archivedatas');
    }
}
