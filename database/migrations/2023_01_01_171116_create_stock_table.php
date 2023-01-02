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
        Schema::create('stock', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('name');
            $table->unsignedInteger('type');
            $table->unsignedInteger('unit');
            $table->integer('package_size');
            $table->unsignedInteger('supplier');
            $table->integer('quantity');
            $table->integer('unit_price');
            // $table->unsignedInteger('crops_id');
            $table->timestamps();
             
            $table->foreign('name')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade');

            $table->foreign('type')
                    ->references('id')
                    ->on('product_type')
                    ->onDelete('cascade');

            $table->foreign('unit')
                    ->references('id')
                    ->on('product_unit')
                    ->onDelete('cascade');

            $table->foreign('supplier')
                    ->references('id')
                    ->on('suppliers')
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
        Schema::dropIfExists('stock');
    }
};
