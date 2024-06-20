<?php

namespace App\Http\Controllers;
use App\Models\Device_list;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function device_list(){
        $device_data=Device_list::get();
        return view('device.device_list', compact('device_data'));
    }

    public function create_device_list()
    {
        return view('device.create_new');
    }

    public function store_device(Request $request)
    {
        $request->validate([
            'location_name' => 'required|string|max:255',
            'street_name' => 'required|string|max:255',
            'camera_type' => 'required|string|max:255',
            'mac_id' => 'required|string|max:255',
            'installation_date' => 'required|date',
            'expire_date' => 'required|date',
        ]);

        Device_list::create($request->all());

        return redirect()->route('device_list')->with('success', 'Device details saved successfully.');
    }

    public function edit_device($id)
    {
        $device = Device_list::findOrFail($id);
        return view('device.edit_device', compact('device'));
    }

    public function update_device(Request $request, $id)
    {
        $request->validate([
            'location_name' => 'required|string|max:255',
            'street_name' => 'required|string|max:255',
            'camera_type' => 'required|string|max:255',
            'mac_id' => 'required|string|max:255',
            'installation_date' => 'required|date',
            'expire_date' => 'required|date',
        ]);

        $device = Device_list::findOrFail($id);
        $device->update($request->all());

        return redirect()->route('device_list')->with('success', 'Device updated successfully.');
    }

    public function device_report(){
        return view('device_report');
    }
}
