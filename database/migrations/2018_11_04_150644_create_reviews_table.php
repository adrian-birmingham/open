<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            //$table->increments('id');
            $table->timestamps();
            $table->text('review');
            $table->integer('attraction_id')->unsigned()->default(0);
            $table->integer('uers_id')->unsigned()->default(0);
            $table->integer('rating')->unsigned()->default(0);
            $table->integer('approved')->unsigned()->default(0);
	    $table->primary(['attraction_id','uers_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
