<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('index')->nullable();
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('transliteration')->nullable();
            $table->longText('arabic')->nullable();
            $table->string('reference')->nullable();
            $table->integer('chapter_id')->unsigned()->nullable();
            $table->foreign('chapter_id')->references('id')->on("chapters")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
