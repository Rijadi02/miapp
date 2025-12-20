<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVisibilityAndEpisodeToAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->boolean('is_public')->default(true)->after('type');
            $table->unsignedBigInteger('episode_id')->nullable()->after('is_public');
            
            $table->foreign('episode_id')->references('id')->on('episodes')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->dropForeign(['episode_id']);
            $table->dropColumn(['is_public', 'episode_id']);
        });
    }
}
