<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Device_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LicenseController extends Controller
{
    public function CheckLicense($mac_id)
    {
        $device = Device_list::where('mac_id', $mac_id)->first();

        if ($device) {
            $currentDate = Carbon::now();
            $expireDate = Carbon::parse($device->expire_date);

            // Debugging: Print current date and expire date
            // Log::info('Current Date: ' . $currentDate->toDateTimeString());
            // Log::info('Expire Date: ' . $expireDate->toDateTimeString());

            if ($currentDate->gt($expireDate)) {
                // Expire date has passed
                return ["status" => false, "message" => "Device has expired."];
            } else {
                // Expire date has not passed
                return ["status" => true, "message" => "Device is still valid."];
            }
        } else {
            // Device not found
            return ["status" => false, "message" => "Device not found."];
            // return "Device not found.";
        }
    }
}
