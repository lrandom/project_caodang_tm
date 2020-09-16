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
