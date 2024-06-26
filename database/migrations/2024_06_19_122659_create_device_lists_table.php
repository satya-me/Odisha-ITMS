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
        Schema::create('device_lists', function (Blueprint $table) {
            $table->id();
            $table->string('device_id')->unique()->nullable(); // Add device_id column
            $table->string('location_name');
            $table->string('street_name');
            $table->string('camera_type');
            $table->string('mac_id')->unique()->nullable();
            $table->date('installation_date');
            $table->date('expire_date');
            $table->boolean('online_status')->nullable()->default(null);
            $table->integer('api_calling_count')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_lists');
    }
};
