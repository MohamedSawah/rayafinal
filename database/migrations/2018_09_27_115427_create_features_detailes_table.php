<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesDetailesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features_detailes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('feature_id')->unsigned();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->string('details_ar')->nullable();
            $table->string('details_en')->nullable();
            $table->timestamps();
            $table->foreign('feature_id')->references('id')->on('features')
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
        Schema::dropIfExists('features_detailes');
    }
}
