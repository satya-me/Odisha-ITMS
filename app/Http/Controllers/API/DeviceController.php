<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Vids;
use App\Models\Health;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\CounterController;
use App\Http\Controllers\API\LicenseController;
use App\Http\Controllers\API\PlateRecognizerController;

class DeviceController extends Controller
{
    protected $CLIENT_BASE_URL = "http://103.176.134.139:8082";
    protected $END_UploadAdorVIDESData = "/api/Vids/UploadAdorVIDESData";
    protected $END_UpdateVidesStatus = "/api/Vids/UpdateVidesStatus";

    public function Health(Request $request)
    {

        $data = $request->validate([
            'LPUID' => 'required|string',
            'Timestamp' => 'required|date',
            'CurrentRAMUsage' => 'required|integer',
            'CurrentStorageUsage' => 'required|integer',
            'CPUTemp' => 'required|integer',
            'GPUTemp' => 'required|integer',
            'LastBOOTon' => 'required|date',
            'CameraLane1' => 'required|boolean',
            'CameraLane2' => 'required|boolean',
            'CameraLane3' => 'required|boolean',
            'OverViewCamera' => 'required|boolean',
        ]);

        $health = Health::updateOrCreate(
            ['lpuid' => $data['LPUID']],
            [
                'timestamp' => $data['Timestamp'],
                'current_ram_usage' => $data['CurrentRAMUsage'],
                'current_storage_usage' => $data['CurrentStorageUsage'],
                'cpu_temp' => $data['CPUTemp'],
                'gpu_temp' => $data['GPUTemp'],
                'last_boot_on' => $data['LastBOOTon'],
                'camera_lane_1' => $data['CameraLane1'],
                'camera_lane_2' => $data['CameraLane2'],
                'camera_lane_3' => $data['CameraLane3'],
                'overview_camera' => $data['OverViewCamera'],
            ]
        );

        if ($health->wasRecentlyCreated) {
            $message = 'Data created successfully';
        } else {
            $message = 'Data updated successfully';
        }

        unset($health['id']);
        $Dispatch = $this->DispatchHealth($health);

        return response()->json(['message' => $message, 'data' => $health, 'Dispatch' => $Dispatch], 201);
    }

    public function VidsData(Request $request)
    {
        $data = $request->validate([
            'EventLog.LPUID' => 'required|string',
            'EventLog.CameraID' => 'required|string',
            'EventLog.Timestamp' => 'required|date_format:Y_m_d_H_i_s',
            'EventLog.Direction' => 'required|string|in:Entry,Exit',
            'EventLog.VehicleCatagory' => 'required|string',
            'EventLog.ANPR' => 'required|string',
            'EventLog.Coordinates.x1' => 'nullable|integer',
            'EventLog.Coordinates.y1' => 'nullable|integer',
            'EventLog.Coordinates.x2' => 'nullable|integer',
            'EventLog.Coordinates.y2' => 'nullable|integer',
            'EventLog.Incidents.*.x1' => 'nullable|integer',
            'EventLog.Incidents.*.y1' => 'nullable|integer',
            'EventLog.Incidents.*.x2' => 'nullable|integer',
            'EventLog.Incidents.*.y2' => 'nullable|integer',
            'EventLog.Incidents.*.label' => 'nullable|string',
            'EventLog.Base64Image' => 'required|string',
        ]);
        $LicenseController = new LicenseController;
        $validation = $LicenseController->CheckLicense($data['EventLog']['LPUID']);
        if (!$validation['status']) {
            // $Dispatch = $this->DispatchVidsData($validation);
            return response()->json($validation, 200);
        }

        // increment the api call count
        $CounterController = new CounterController();
        $countResponse = $CounterController->APICallCounter($data['EventLog']['LPUID']);
        if (!$countResponse) {
            return response()->json($countResponse, 200);
        }

        try {

            // Assuming $Analyzer is properly retrieved or handled
            $PlateRecognizerController = new PlateRecognizerController;

            // Prepare request to PlateRecognizerController
            $requestForAnalyzer = new Request([
                'base64_image' => $data['EventLog']['Base64Image'] // Adjust to actual field name if necessary
            ]);

            // Call method to upload image to Plate Recognizer and get results
            $Analyzer = $PlateRecognizerController->uploadImageToPlateRecognizer($requestForAnalyzer);
            $Analyzer = json_decode($Analyzer, true);
            if (isset($Analyzer['status_code']) == 403) {

                // return $Analyzer['detail'];
                return response()->json(['message' => "Please contact (Kotai) admin."], 200);
            }
            // Prepare event log data

            $vids = Vids::create([
                'mac_id' => $data['EventLog']['LPUID'],
                'camera_id' => $data['EventLog']['CameraID'],
                'timestamp' => $data['EventLog']['Timestamp'],
                'direction' => $data['EventLog']['Direction'],
                'vehicle_category' => $Analyzer['results'][0]['vehicle']['type'] ?? null,
                'anpr' => $Analyzer['results'][0]['plate'] ?? null,
                'base64_image' => $data['EventLog']['Base64Image'],
                'Coordinates_x1' => $data['EventLog']['Coordinates']['x1'] ?? null,
                'Coordinates_y1' => $data['EventLog']['Coordinates']['y1'] ?? null,
                'Coordinates_x2' => $data['EventLog']['Coordinates']['x2'] ?? null,
                'Coordinates_y2' => $data['EventLog']['Coordinates']['y2'] ?? null,
                'Incidents_x1' => $data['EventLog']['Incidents'][0]['x1'] ?? null,
                'Incidents_y1' => $data['EventLog']['Incidents'][0]['y1'] ?? null,
                'Incidents_x2' => $data['EventLog']['Incidents'][0]['x2'] ?? null,
                'Incidents_y2' => $data['EventLog']['Incidents'][0]['y2'] ?? null,
                'label' => $data['EventLog']['Incidents'][0]['label'] ?? null,
            ]);

            $eventLog = [
                "EventLog" => [
                    "LPUID" => $vids->mac_id,
                    "CameraID" => $vids->camera_id,
                    "Timestamp" => $vids->timestamp,
                    "Direction" => $vids->direction,
                    "VehicleCatagory" => $Analyzer['results'][0]['vehicle']['type'] ?? "N/A",
                    "ANPR" => $Analyzer['results'][0]['plate'] ?? "N/A",
                    "Coordinates" => [
                        "x1" => $data['EventLog']['Coordinates']['x1'],
                        "y1" => $data['EventLog']['Coordinates']['y1'],
                        "x2" => $data['EventLog']['Coordinates']['x2'],
                        "y2" => $data['EventLog']['Coordinates']['y2'],
                    ],
                    "Incidents" => [
                        [
                            "x1" => $data['EventLog']['Incidents'][0]['x1'],
                            "y1" => $data['EventLog']['Incidents'][0]['y1'],
                            "x2" => $data['EventLog']['Incidents'][0]['x2'],
                            "y2" => $data['EventLog']['Incidents'][0]['y2'],
                            "label" => $data['EventLog']['Incidents'][0]['label'],
                        ]
                    ],
                    "Base64Image" => $vids->base64_image,
                ]
            ];

            // Dispatch event log data (assuming DispatchVidsData exists and does something useful)
            $Dispatch = $this->DispatchVidsData($eventLog);

            return response()->json(['message' => "Data created successfully", 'Dispatch' => $Dispatch], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => "Error creating data", 'error' => $e->getMessage()], 500);
        }
    }


    public function DispatchHealth($health)
    {
        $baseUrl = $this->CLIENT_BASE_URL;
        $endpoint = $this->END_UpdateVidesStatus;
        // return $baseUrl . $endpoint;
        // Initialize cURL session
        $curl = curl_init();

        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $baseUrl . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($health), // Convert array to JSON string
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
            ),
        ));

        // Execute cURL request
        $response = curl_exec($curl);

        // Check for cURL errors
        if (curl_errno($curl)) {
            $error_message = curl_error($curl);
            // Handle error as needed
        }

        // Close cURL session
        curl_close($curl);

        return $response; // Return response from the API
    }

    public function DispatchVidsData($vids)
    {



        // return $vids;
        $baseUrl = $this->CLIENT_BASE_URL;
        $endpoint = $this->END_UploadAdorVIDESData;
        // return $baseUrl . $endpoint;
        // Initialize cURL session
        $curl = curl_init();

        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $baseUrl . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($vids), // Convert array to JSON string
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
            ),
        ));

        // Execute cURL request
        $response = curl_exec($curl);

        // Check for cURL errors
        if (curl_errno($curl)) {
            $error_message = curl_error($curl);
            // Handle error as needed
        }

        // Close cURL session
        curl_close($curl);

        return $response; // Return response from the API
    }

    // check license for the MAC ID
}
