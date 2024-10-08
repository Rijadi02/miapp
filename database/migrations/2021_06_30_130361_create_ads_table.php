<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('photo');
            $table->string('gallery')->nullable();
            $table->longText('description')->nullable();
            $table->string('link')->nullable();
            $table->string('tags')->nullable();
            $table->string('city')->nullable();
            $table->string('map')->nullable();
            $table->string('media')->nullable();
            $table->string('status')->nullable();
            $table->string('contact_details')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
