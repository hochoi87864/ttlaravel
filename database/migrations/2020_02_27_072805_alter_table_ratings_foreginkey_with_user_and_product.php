<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableRatingsForeginkeyWithUserAndProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('ratings', function (Blueprint $table) {
            $table->foreign('ra_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('ra_product_id')->references('id')->on('products')->onDelete('set null');
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
        Schema::table('ratings', function (Blueprint $table) {
        $table->dropForeign(['ra_user_id']);
        $table->dropForeign(['ra_product_id']);
        });
    }
}
