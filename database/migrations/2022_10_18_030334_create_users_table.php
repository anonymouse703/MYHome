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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->unsignedSmallInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->unsignedSmallInteger('civil_status_id');
            $table->foreign('civil_status_id')->references('id')->on('civil_statuses');
            $table->string('address');
            $table->BigInteger('contact_no');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedSmallInteger('company_id');
            $table->foreign('company_id')->references('id')->on('real_state_companies');
            $table->unsignedSmallInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->string('username');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
