<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile1');
            $table->string('mobile2')->nullable();
            $table->string('landline')->nullable();
            $table->string('address');
            $table->string('city1');
            $table->string('address2')->nullable();
            $table->string('city2')->nullable();
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->integer('country_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries')
             ->onDelete('cascade');
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
}
