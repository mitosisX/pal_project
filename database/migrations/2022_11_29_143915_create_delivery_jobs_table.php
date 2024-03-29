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
        Schema::create('delivery_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('type');
            $table->mediumText('unit');
            $table->mediumText('quantity');
            $table->mediumText('status');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('estates_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('request_categories')
                ->onDelete('cascade');

            $table->foreign('products_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('estates_id')
                ->references('id')
                ->on('estates')
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
        Schema::dropIfExists('delivery_jobs');
    }
};
