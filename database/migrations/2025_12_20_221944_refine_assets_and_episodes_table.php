<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn('is_public');
        });

        Schema::table('episodes', function (Blueprint $table) {
            $table->text('character_ids')->nullable()->after('text');
            $table->unsignedBigInteger('assigned_to')->nullable()->after('character_ids');
            
            $table->foreign('assigned_to')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('episodes', function (Blueprint $table) {
            $table->dropForeign(['assigned_to']);
            $table->dropColumn(['character_ids', 'assigned_to']);
        });

        Schema::table('assets', function (Blueprint $table) {
            $table->boolean('is_public')->default(true)->after('type');
        });
    }
};
