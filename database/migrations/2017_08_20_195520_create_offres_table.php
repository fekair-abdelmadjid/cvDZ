<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->text('presentation')->nullable();
            $table->string('entrprise')->nullable();
            $table->string('Secteur')->nullable();
            $table->string('Wilaya')->nullable();
            $table->date('Date')->nullable();
            $table->integer('Nombre_post')->nullable();
            $table->text('Niveau')->nullable();
            $table->string('Type_contrat')->nullable();
            $table->text('Dossier')->nullable();
            $table->string('adrasse')->nullable();
            $table->integer('phone')->nullable();
            $table->string('source')->nullable();
            $table->string('logo')->default("Offrelogo/default-offre.png");
            $table->text('Profil_recherche')->nullable();
            $table->text('Missions_poste')->nullable();
            $table->integer('user_id')->unsigned();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
