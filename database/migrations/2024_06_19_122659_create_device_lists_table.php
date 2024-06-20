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
            $table->string('location_name');
            $table->string('street_name');
            $table->string('camera_type');
            $table->string('mac_id');
            $table->string('installation_date');
            $table->string('expire_date');
            $table->string('online_status')->nullable()->default(null);
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
