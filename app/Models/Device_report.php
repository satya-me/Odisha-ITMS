<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_report extends Model
{
    use HasFactory;
    protected $fillable=[
        'device_location',
        'incident_type',
        'incident_image',
        'anpr_number',
    ];
}
