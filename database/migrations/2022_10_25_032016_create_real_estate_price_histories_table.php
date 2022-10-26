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
        Schema::create('real_estate_price_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('real_estate_profile_id');
            $table->foreign('real_estate_profile_id')->references('id')->on('real_estate_profiles');
            $table->string('price');
            $table->string('total_unit');
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
        Schema::dropIfExists('real_estate_price_histories');
    }
};
