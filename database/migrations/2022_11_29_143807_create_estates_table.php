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
        Schema::create('estates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('managers_id');
            $table->unsignedInteger('fields_id');
            $table->mediumText('namd');
            $table->timestamps();

            $table->foreign('fields_id')
                ->references('id')
                ->on('fields')
                ->onDelete('cascade');

            $table->foreign('managers_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('estates');
    }
};
