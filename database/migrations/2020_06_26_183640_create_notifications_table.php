<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->String('type');
            $table->String('titel');
            $table->String('des');
            $table->String('status');
            $table->string("url");//عند الظغط على النوتي يتم توجية المستخدم الى ال url
//            $table->integer('castmer_id');
            $table->timestamps();
            /*notifications type
            عند اضافة متجر في منطقة المستخدم
            عند قبول الطلب من قبل الدلفري
            عند تفعيل وسام للمستخدم
            انتهاء وقت الاعلان عن منتج او متجر
            عند نزول عرض جديد لمطعم او متجر المستخدم المفظل (المطعم الاكثر طلبا)
            بعد تسليم الطلب بنصف ساعه من اجل التقيمات
            استكمال بيانات التسجيل

             *  */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
