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
        Schema::create('rices', function (Blueprint $table) {
            $table->id();
            $table->string('departure');
            $table->string('destination');
            $table->time('departure_time', precision: 0);
            $table->time('arrival_time', precision: 0);
            // TODO:: menschien tog iets met een datum die elke week/dag versprinkt
            $table->set('weekdays', ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday']);
            $table->softDeletes('delete_time', precision: 0);
            $table->enum('means_of_transport', ['train', 'bus', 'metro', 'tram', 'ferryboat']);
            $table->float('places');
            $table->foreignId('edit_by')->nulable()->constrained('users');
            $table->foreignId('creat_by')->nulable()->constrained('users');
            $table->timestamps();
            //TODO:: paron toevoegen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rices');
    }
};
