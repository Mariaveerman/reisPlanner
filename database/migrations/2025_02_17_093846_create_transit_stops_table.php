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
        Schema::create('transit_stops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rices_id')->constrained('rices');
            $table->string('station');
            $table->time('departure_time', precision: 0);
            $table->time('arrival_time', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transit_stops');
    }
};
