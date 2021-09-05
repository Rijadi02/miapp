<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('date');
            $table->integer('day_id')->unsigned();
            $table->foreign('day_id')->references('id')->on("days")->onDelete("cascade");
            $table->string('time');
            $table->string('map')->nullable();
            $table->string('place')->nullable();
            $table->string('link')->nullable();
            $table->integer('status');
            $table->string('allowance');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on("cities")->onDelete("cascade");
            $table->integer('lecturer_id')->unsigned();
            $table->foreign('lecturer_id')->references('id')->on("lecturers")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
