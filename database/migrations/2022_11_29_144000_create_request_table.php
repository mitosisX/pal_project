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
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('unit_id');
            $table->unsignedInteger('estates_id');
            $table->unsignedInteger('request_category_id');
            $table->mediumText('status');
            $table->integer('quantity');
            $table->mediumText('description');
            $table->timestamps();

            $table->foreign('products_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('type_id')
                ->references('id')
                ->on('product_type')
                ->onDelete('cascade');

            $table->foreign('unit_id')
                ->references('id')
                ->on('product_unit')
                ->onDelete('cascade');

            $table->foreign('estates_id')
                ->references('id')
                ->on('estates')
                ->onDelete('cascade');

            $table->foreign('request_category_id')
                ->references('id')
                ->on('request_categories')
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
        Schema::dropIfExists('request');
    }
};
