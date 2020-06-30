<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        StoreVotes
//    stores_votes

        Schema::create('stores_votes', function (Blueprint $table) {
            $table->id();
            $table->integer('vote');
            $table->integer('store_id');
            $table->integer('user_id');//for catmer
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
        Schema::dropIfExists('stores_votes');
    }
}
