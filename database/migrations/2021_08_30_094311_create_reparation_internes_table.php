<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparationInternesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparation_internes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("materiel_id")->constrained();
            $table->longText("actesExecutes");
            $table->Text("observations");
            $table->date("datePanne");
            $table->date("dateIntervention");

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
        Schema::table('reparation_internes', function(Blueprint $table){
            $table->dropForeign(["materiel_id"]);
        });

        Schema::dropIfExists('reparation_internes');
    }
}
