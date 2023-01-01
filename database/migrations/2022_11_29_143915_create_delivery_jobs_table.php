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
            $table->mediumText('description');
            $table->mediumText('type');
            $table->mediumText('unit');
            $table->mediumText('quantity');
            $table->mediumText('status');
            $table->unsignedInteger('drivers_id');
            $table->unsignedInteger('products_id');
            $table->unsignedInteger('estates_id');
            $table->timestamps();

            $table->foreign('drivers_id')
                ->references('id')
                ->on('users')
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
