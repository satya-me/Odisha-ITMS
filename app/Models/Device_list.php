<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_list extends Model
{
    use HasFactory;
    protected $fillable=[
        'location_name',
        'street_name',
        'camera_type',
        'mac_id',
        'installation_date',
        'expire_date',
        // 'online_status'
    ];
}
