<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path', 200);
            $table->integer('product_id');
            $table->tinyInteger('is_preview')->default(0);//0 0 phai anh dai dien, 1 la anh dd
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
        //
        Schema::dropIfExists('images');
    }
}
