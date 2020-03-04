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
            $table->increments('id')->nullable();
            $table->string('pro_name')->nullable();
            $table->string('pro_slug')->index();
            $table->integer('pro_category_id')->unsigned()->nullable()->length(10);
            $table->integer('pro_price')->default(0);
            $table->integer('pro_author_id')->unsigned()->nullable()->index()->length(10);
            $table->tinyinteger('pro_sale')->default(0);
            $table->tinyinteger('pro_active')->default(1)->index();
            $table->tinyinteger('pro_hot')->default(0);
            $table->tinyinteger('pro_view')->default(0);
            $table->string('pro_description')->nullable();
            $table->string('pro_avatar')->nullable();
            // $table->foreign('pro_category_id')->references('id')->on('categories')->onDelete('null');
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
