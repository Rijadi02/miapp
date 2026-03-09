<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetalsJsonTable extends Migration
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
            $table->longText('json');           // Full raw JSON from MetalPriceAPI
            $table->decimal('price', 18, 6);    // Gold price in EUR (1 troy oz)
            $table->longText('silver_json');    // Full raw JSON (same response, kept for convenience)
            $table->decimal('silver_price', 18, 6); // Silver price in EUR (1 troy oz)
            $table->date('date')->unique();     // One record per day
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
