<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vids extends Model
{
    use HasFactory;

    protected $fillable = [
        'mac_id',
        'camera_id',
        'timestamp',
        'direction',
        'vehicle_category',
        'anpr',
        'base64_image',
        'x1',
        'y1',
        'x2',
        'y2',
        'label',
    ];
}
