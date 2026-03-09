<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metals_json', function (Blueprint $table) {
            $table->id();
            $table->longText('json');
            $table->decimal('price', 18, 6);
            $table->longText('silver_json');
            $table->decimal('silver_price', 18, 6);
            $table->date('date')->unique();
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
        Schema::dropIfExists('metals_json');
    }
}
