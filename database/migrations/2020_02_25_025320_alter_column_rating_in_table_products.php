<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnRatingInTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //Tổng số ng đánh giá
            $table->integer('pro_total_rating')->default('0');
            // Tổng số điểm đánh giá
            $table->integer('pro_total_number')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //Tổng số ng đánh giá
            $table->dropColumn('pro_total_rating');
            // Tổng số điểm đánh giá
            $table->dropColumn('pro_total_number');
        });
    }
}
