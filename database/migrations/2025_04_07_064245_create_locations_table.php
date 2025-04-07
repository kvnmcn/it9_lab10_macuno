<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->string('street_address', 40)->nullable();
            $table->string('postal_code', 12)->nullable();
            // can just omit nullable(false) since the default is NOT NULL
            // i'm putting nullable() to say it can contain NULL value
            $table->string('city', 30)->nullable(false);
            $table->string('state_province', 25)->nullable();
            $table->char('country_id')->nullable();
            $table->foreign('country_id')->references('country_id')->on('countries');
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
        Schema::dropIfExists('locations');
    }
}
