<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                      //السلةللطلب
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('order_id');
            $table->integer('quantity');//الكمية
            $table->float('Price_at_time');
            $table->string('Note');
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
        Schema::dropIfExists('shopping_cart');
    }
}
