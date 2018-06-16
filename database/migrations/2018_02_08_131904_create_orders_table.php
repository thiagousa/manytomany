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
            $table->increments('ordersId')->unique();
            //$table->integer('productsId')->unsigned();
            // $table->foreign('productsId')->references('productsId')->on('products');
            $table->integer('promotersId')->unsigned();
            $table->foreign('promotersId')->references('promotersId')->on('promoters')->onDelete('cascade');
            $table->integer('finalValue')->nullable();
            $table->string('status');
            $table->softDeletes();
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
        if (Schema::hasTable('orders')) {
            // Schema::dropForeign('orders_productsid_foreign');
            Schema::drop('orders');
        }
    }
}
