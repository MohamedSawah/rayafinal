<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code');
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('info_en')->nullable();
            $table->string('info_ar')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_ar')->nullable();
            $table->double('price')->nullable();
            $table->double('price_after')->nullable();
            // $table->double('cost');
            $table->string('otherData')->nullable();
            $table->integer('quantity')->nullable();            
            $table->string('img_main')->nullable();        
            $table->integer('slug')->nullable();
            $table->integer('order')->nullable();
            $table->integer('status');
            $table->unsignedInteger('category_id');
            $table->timestamps();
        
            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('cascade');
            // $table->foreign('image_id')->references('id')->on('images')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
