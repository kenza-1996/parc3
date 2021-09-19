<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparationsExterneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparations_externe', function (Blueprint $table) {
            $table->id();
            $table->foreignId("materiel_id")->constrained();
            $table->foreignId("structure_id")->constrained();
            $table->foreignId("personnel_id")->constrained();
            $table->foreignId("reparateur_id")->constrained();
            $table->string("designation");
            $table->dateTime("date_panne");
            $table->dateTime("date_sortie");
            $table->dateTime("date_retour");
            $table->string("etat");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reparations_externe', function (Blueprint $table) {
            $table->dropForeign("materiel_id","structure_id", "personnel_id", "reparateur_id");
        });
        Schema::dropIfExists('reparations_externe');
    }
}
