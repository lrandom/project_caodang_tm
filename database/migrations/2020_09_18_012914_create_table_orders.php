<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('user_id');
            $table->string('address', 220)->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('receiver_name', 50)->nullable();
            $table->tinyint('is_default')->default(1);//1 is default, 0 is in this table
            $table->float('total_price');
            $table->tinyint('status')->default(0);
            //0 - pending,
            // 1 - đã giao,
            // 2- đang giao,
            // 3- đã nhận,
            // 4- đã huỷ
            $table->text('note', 500);//ghi chu tu nguoi dung
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
