<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;

    protected $fillable = [
        'lpuid',
        'timestamp',
        'current_ram_usage',
        'current_storage_usage',
        'cpu_temp',
        'gpu_temp',
        'last_boot_on',
        'camera_lane_1',
        'camera_lane_2',
        'camera_lane_3',
        'overview_camera'
    ];
}
