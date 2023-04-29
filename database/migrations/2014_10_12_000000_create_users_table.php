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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->increments('id');
            $table->date('date_of_birth');
            $table->string('phone');
            $table->string('sex');
            $table->string('address');
            $table->string('level_study')->nullable();
            $table->string('history')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('is_admin')->default(0);
            $table->integer('is_voters')->default(0);
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
