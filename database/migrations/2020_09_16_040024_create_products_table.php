<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            /*
             * PET
            */
            $table->string('title', 225);
            $table->float('price');
            $table->text('content');
            $table->integer('category_id');
            $table->integer('sell_count');
            /*END PET*/

            /*FOOD*/
            $table->string('title', 225);
            $table->float('weight');
            $table->text('content');
            $table->string('expired_date');
            $table->integer('quantity');
            $table->float('price');
            $table->integer('discount');
            $table->integer('sell_count');

            /*TIN TUC*/
            $table->string('title', 255);
            $table->text('content');
            $table->string('description', 255);
            $table->string('keyword', 255);
            $table->string('preview', 255);//anh dai dien
            $table->integer('category_id');
            $table->integer('user_id');
            /*END*/

            /*DONG HO && XE DAP*/
            $table->string('title', 255);
            $table->text('content');
            $table->integer('user_id');
            $table->integer('quantity');
            $table->float('price');
            $table->integer('discount');
            $table->integer('sell_count');
            /*END DONG HO XE DAP*/
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
        Schema::dropIfExists('products');
    }
}
