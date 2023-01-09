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
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_of_request');
            $table->unsignedInteger('request_details_id');
            $table->unsignedInteger('managers_id');
            $table->unsignedInteger('request_category_id');

            $table->timestamps();

            $table->foreign('managers_id')
                ->references('id')
                ->on('users');
            // ->onDelete('cascade');

            $table->foreign('request_details_id')
                ->references('id')
                ->on('request_details')
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
        Schema::dropIfExists('requests');
    }
};
