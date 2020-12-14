<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_country_id');
            $table->foreign('from_country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('to_country_id');
            $table->foreign('to_country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('from_region_id');
            $table->foreign('from_region_id')->references('id')->on('regions');
            $table->unsignedBigInteger('to_region_id');
            $table->foreign('to_region_id')->references('id')->on('regions');
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
        Schema::dropIfExists('routes');
    }
}
