<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersProductsPromotors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products_promotors', function (Blueprint $table) {
            $table->integer('productsId')->unsigned();
            $table->foreign('productsId')->references('productsId')->on('products')->onDelete('cascade');
            $table->integer('ordersId')->unsigned();
            $table->foreign('ordersId')->references('ordersId')->on('orders')->onDelete('cascade');
            $table->string('o_priceBegin')->nullable();
            $table->string('o_priceEnd')->nullable();
            $table->integer('o_quantity')->nullable();

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
        Schema::dropIfExists('orders_products_promotors');
    }
}
