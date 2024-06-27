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
        Schema::create('healths', function (Blueprint $table) {
            $table->id();
            $table->string("lpuid")->nullable();
            $table->string("timestamp")->nullable();
            $table->string("current_ram_usage")->nullable();
            $table->string("current_storage_usage")->nullable();
            $table->string("cpu_temp")->nullable();
            $table->string("gpu_temp")->nullable();
            $table->string("last_boot_on")->nullable();
            $table->string("camera_lane_1")->nullable();
            $table->string("camera_lane_2")->nullable();
            $table->string("camera_lane_3")->nullable();
            $table->string("overview_camera")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healths');
    }
};
