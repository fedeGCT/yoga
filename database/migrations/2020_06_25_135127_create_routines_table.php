<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('program_id');
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->string('image');
            $table->string('time');
            $table->timestamps();
            $table->foreign('program_id')->references('id')->on('programs')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
