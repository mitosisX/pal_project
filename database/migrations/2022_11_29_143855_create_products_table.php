<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->mediumText('name');
            $table->unsignedInteger('type');
            $table->mediumText('unit');
            $table->integer('package_size');
            $table->mediumText('supplier');
            $table->mediumText('use');
            $table->mediumText('rate');
            $table->integer('unit_price');
            // $table->mediumText('usage')->default('');
            $table->timestamps();

            $table->foreign('type')
                ->references('id')
                ->on('product_type')
                ->onDelete('cascade');
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
};
