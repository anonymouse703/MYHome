<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('real_estate_type_id');
            $table->foreign('real_estate_type_id')->references('id')->on('real_estate_types');
            $table->string('model_name');
            $table->string('description');
            $table->unsignedSmallInteger('real_estate_company_id');
            $table->foreign('real_estate_company_id')->references('id')->on('real_estate_companies');
            $table->unsignedSmallInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->integer('total_units');
            $table->integer('price');
            $table->integer('total_vacant');
            $table->integer('total_sold');
            $table->unsignedSmallInteger('accomodation_id');
            $table->foreign('accomodation_id')->references('id')->on('accomodations');
            $table->unsignedSmallInteger('satatus_id');
            $table->foreign('satatus_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('real_estate_profiles');
    }
};
