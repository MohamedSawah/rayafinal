<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('invoiceID')->default(10000);
            $table->integer('user_id')->unsigned();
            // $table->integer('product_id')->unsigned();
            $table->integer('quantity');
            $table->double('total_price');
            $table->double('shipping_cost');
            $table->string('paymentMethod');
            $table->string('paymentToken');
            $table->string('payment_statue');
            $table->string('coupon');
            $table->integer('statue');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('orders');
    }
}
