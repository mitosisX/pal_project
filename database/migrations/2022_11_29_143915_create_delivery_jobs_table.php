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
            $table->mediumText('status');
            $table->unsignedInteger('drivers_id');
            $table->unsignedInteger('items_id');
            $table->unsignedInteger('estates_id');
            $table->timestamps();

            $table->foreign('drivers_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('delivery_jobs');
    }
};
