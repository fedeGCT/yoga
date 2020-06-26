<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutineVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routine_video', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('routine_id');
            $table->unsignedBigInteger('video_id');
            $table->timestamps();
            $table->foreign('routine_id')->references('id')->on('routines')->onUpdate('cascade');
            $table->foreign('video_id')->references('id')->on('videos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routine_video');
    }
}
