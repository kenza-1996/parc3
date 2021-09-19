<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDpsdemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpsdemandes', function (Blueprint $table) {
            $table->id();
            $table->string("num_dps");
            
            $table->dateTime("date");
            $table->unsignedBigInteger('materiel1');
            $table->unsignedBigInteger('materiel2');
            $table->unsignedBigInteger('materiel3');
            $table->foreign('materiel1')->references('id')->on('materiels');
            $table->foreign("materiel2")->references('id')->on('materiels');
            $table->foreign("materiel3")->references('id')->on('materiels');
            
            $table->boolean("traiter")->default(0)->nullable();
            
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
        Schema::table('dpsdemandes', function (Blueprint $table) {
            $table->dropForeign("materiel1","materiel2","materiel3");
        });
        Schema::dropIfExists('dpsdemandes');
    }
}
