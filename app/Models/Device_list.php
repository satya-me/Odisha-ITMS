<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device_list extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_name', 'street_name', 'camera_type', 'mac_id', 'installation_date', 'expire_date', 'online_status', 'api_calling_count'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            // Generate a custom device_id based on the auto-incrementing id
            $model->device_id = 'DCX' . str_pad($model->id, 3, '0', STR_PAD_LEFT);
            $model->save();
        });
    }
}
