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
        Schema::create('request_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('items_id');
            $table->mediumText('description');
            $table->unsignedInteger('estates_id');
            $table->mediumText('category');
            $table->mediumText('status');
            $table->integer('total');
            $table->date('date');
            $table->timestamps();

            $table->foreign('items_id')
                ->references('id')
                ->on('items')
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
        Schema::dropIfExists('request_details');
    }
};
