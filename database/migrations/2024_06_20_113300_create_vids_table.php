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
        Schema::create('vids', function (Blueprint $table) {
            $table->id();
            $table->string('mac_id');
            $table->string('camera_id');
            $table->timestamp('timestamp');
            $table->enum('direction', ['Entry', 'Exit']);
            $table->string('vehicle_category');
            $table->string('anpr');
            $table->longText('base64_image');
            $table->string('Coordinates_x1')->nullable();
            $table->string('Coordinates_y1')->nullable();
            $table->string('Coordinates_x2')->nullable();
            $table->string('Coordinates_y2')->nullable();

            $table->integer('Incidents_x1')->nullable();
            $table->integer('Incidents_y1')->nullable();
            $table->integer('Incidents_x2')->nullable();
            $table->integer('Incidents_y2')->nullable();
            $table->string('label')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vids');
    }
};
