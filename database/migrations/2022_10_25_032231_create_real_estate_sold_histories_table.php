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
        Schema::create('real_estate_sold_histories', function (Blueprint $table) {
            $table->id();
            $table->date('date_sold');
            $table->unsignedSmallInteger('real_estate_id');
            $table->foreign('real_estate_id')->references('id')->on('real_estate_profiles');
            $table->integer('price');
            $table->integer('price_discounted');
            $table->unsignedSmallInteger('sold_to');
            $table->foreign('sold_to')->references('id')->on('clients');
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
        Schema::dropIfExists('real_estate_sold_histories');
    }
};
