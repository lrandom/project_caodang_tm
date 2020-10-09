<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProductChangeDiscountColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        //
        Schema::table('products', function (Blueprint $table) {
            // $table->removeColumn('discount');
            //THÊM THƯ VIÊN DBAL ĐỂ CHẠY ĐƯỢC LỆNH NÀY
            //tạo root gõ lệnh composer require doctrine/dbal
            $table->integer('discount')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        //
    }
}
