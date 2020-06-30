<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelverysOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delverys_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('delvery_id');
            $table->integer('order_id');
            $table->integer('status');//تم التوصيل , تم قبول الطلب وجاري النقل
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
        Schema::dropIfExists('delverys_orders');
    }
}
