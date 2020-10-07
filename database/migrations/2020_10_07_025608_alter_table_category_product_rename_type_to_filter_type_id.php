<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableCategoryProductRenameTypeToFilterTypeId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        //
        Schema::table('category_products', function (Blueprint $table) {
            $table->renameColumn('type', 'filter_type_id');
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
        Schema::table('category_products', function (Blueprint $table) {
            $table->renameColumn('filter_type_id', 'type');
        });
    }
}
