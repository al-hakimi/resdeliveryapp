<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//الاوسمة
        Schema::create('decorations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('Num_of_succes_requests');// مثلا عند طلب 20 طلب ناجح يتم عمل وسام للمستخدم وخصم /
            $table->float('delivery_discount_rate');// الخصم
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
        Schema::dropIfExists('decorations');
    }
}
