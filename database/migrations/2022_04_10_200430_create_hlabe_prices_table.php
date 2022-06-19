<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHlabePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hlabe_prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hlabe_id')->unsigned();;
            $table->integer('price')->nullable();
            $table->foreign('hlabe_id')->references('id')->on('hlabes')->onDelete('cascade');
            $table->bigInteger('hosbital_id')->unsigned();
            $table->foreign('hosbital_id')->references('id')->on('hosbitals')->onDelete('cascade');
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
        Schema::dropIfExists('hlabe_prices');
    }
}
