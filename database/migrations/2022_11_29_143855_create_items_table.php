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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('name');
            $table->integer('package_size');
            $table->integer('unit');
            $table->integer('quantity');
            $table->unsignedInteger('crops_id');
            $table->timestamps();

            $table->foreign('crops_id')
                ->references('id')
                ->on('crops')
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
        Schema::dropIfExists('items');
    }
};
