<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->char('country_id', 2)->primary();
            $table->string('country_name', 40)->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->foreign('region_id')->references('region_id')->on('regions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * MACUNO - LAB 10  
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
