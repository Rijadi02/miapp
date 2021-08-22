<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recitations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('surah');
            $table->string('ayahs');
            $table->string('link')->nullable();
            $table->string('audio')->nullable();
            $table->integer('reciter_id')->unsigned();
            $table->foreign('reciter_id')->references('id')->on("reciters")->onDelete("cascade");
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
        Schema::dropIfExists('recitations');
    }
}
