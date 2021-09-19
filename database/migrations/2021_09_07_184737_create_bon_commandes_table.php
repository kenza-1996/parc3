<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_commandes', function (Blueprint $table) {
            $table->id();
            $table->string("num_boncom");
            $table->foreignId("reparateur_id")->constrained();
            $table->foreignId("dpsdemande_id")->constrained();
            
            $table->string('prix1');
            $table->string('prix2');
            $table->string('prix3');
           
            $table->string('ht')->nullable();
            $table->string('tva')->nullable();
            $table->string('ttc')->nullable();
            $table->unsignedBigInteger('materiel1');
            $table->unsignedBigInteger('materiel2');
            $table->unsignedBigInteger('materiel3');
            $table->foreign('materiel1')->references('id')->on('materiels');
            $table->foreign("materiel2")->references('id')->on('materiels');
            $table->foreign("materiel3")->references('id')->on('materiels');
            $table->unsignedBigInteger('structure1');
            $table->unsignedBigInteger('structure2');
            $table->unsignedBigInteger('structure3');
            $table->foreign('structure1')->references('id')->on('structures');
            $table->foreign("structure2")->references('id')->on('structures');
            $table->foreign("structure3")->references('id')->on('structures');
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
        Schema::dropIfExists('bon_commandes');
    }
}
