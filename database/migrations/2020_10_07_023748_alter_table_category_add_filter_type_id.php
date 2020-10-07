<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use function foo\func;

class AlterTableCategoryAddFilterTypeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        //
        Schema::table('category', function (Blueprint $table) {
            $table->bigInteger('filter_type_id');
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
        Schema::table('category', function (Blueprint $table) {
            $table->dropColumn('filter_type_id');
        });
    }
}
