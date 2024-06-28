<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlateRecognizerController extends Controller
{
    public function uploadImageToPlateRecognizer(Request $request)
    {
        // Validate that only one input is provided
        $hasImage = $request->hasFile('image');
        $hasBase64Image = $request->filled('base64_image');
        $hasImageUrl = $request->filled('image_url');

        if (($hasImage + $hasBase64Image + $hasImageUrl) != 1) {
            return response()->json(['error' => 'Only one input is allowed: image, base64_image, or image_url'], 400);
        }
        // Define API endpoint and authorization token
        $apiUrl = 'https://api.platerecognizer.com/v1/plate-reader/';
        // 07fe3399b51d3706d9cb1e85cdff00589da82ab4
        $authorizationToken = 'Token' . env('PLATE_API_TOKEN');

        // Initialize CURL
        $curl = curl_init();

        // Common CURL options
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_ENCODING, '');
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            "Authorization: $authorizationToken"
        ));

        // Determine which upload method to use
        if ($request->hasFile('image')) {
            // Option 1a: Upload an image file
            $filePath = $request->file('image')->getPathname();
            $upload = new \CURLFile($filePath);

            curl_setopt($curl, CURLOPT_POSTFIELDS, array(
                'upload' => $upload
            ));
        } elseif ($request->input('base64_image')) {
            // Option 1b: Upload a Base64-encoded image
            $base64Image = $request->input('base64_image');

            curl_setopt($curl, CURLOPT_POSTFIELDS, array(
                'upload' => $base64Image
            ));
        } elseif ($request->input('image_url')) {
            // Option 2: Upload an image via URL
            $imageUrl = $request->input('image_url');

            curl_setopt($curl, CURLOPT_POSTFIELDS, array(
                'upload_url' => $imageUrl
            ));
        } else {
            // Handle the case where no valid input is provided
            curl_close($curl);
            return response()->json(['error' => 'No valid input provided'], 400);
        }

        // Execute CURL request
        $response = curl_exec($curl);

        // Check for errors
        if (curl_errno($curl)) {
            echo 'Error:' . curl_error($curl);
        }

        // Close CURL session
        curl_close($curl);

        // Output the response
        // echo $response;
        return $response;
    }
}
