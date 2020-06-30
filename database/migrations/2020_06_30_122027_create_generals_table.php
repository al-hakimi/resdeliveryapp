<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('Welcome_message');
            $table->string('app_link_inplay');
            $table->string('app_link_appstore');
            $table->string('technical_support_email');
            $table->string('technical_support_info');
            $table->float('delivery_price_per_km');
            $table->float('delivery_time_per_km');
            $table->binary('app_logo');
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
        Schema::dropIfExists('generals');
    }
}
