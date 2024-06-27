<?php

namespace App\Http\Controllers\API;

use App\Models\Device_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class CounterController extends Controller
{
    public function APICallCounter($mac_id)
    {
        $device = Device_list::where('mac_id', $mac_id)->first();

        if ($device) {
            // Increment the existing count
            $device->increment('api_calling_count');

            // Fetch the updated device to verify the new count
            $device = Device_list::where('mac_id', $mac_id)->first();
            Log::info('API Calling Count: ' . $device->api_calling_count);

            return true; // Indicate success
        } else {
            Log::error('Device not found: ' . $mac_id);
            return false; // Indicate failure
        }
    }
}
