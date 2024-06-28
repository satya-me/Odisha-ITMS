<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class EnvController extends Controller
{
    public function PLATE_API_TOKEN(Request $request)
    {
        $request->validate([
            'PLATE_API_TOKEN' => 'required|string',
        ]);

        $token = $request->input('PLATE_API_TOKEN');

        $this->updateEnv('PLATE_API_TOKEN', $token);

        return response()->json(['message' => 'Token updated successfully']);
    }
    public function PLATE_API_STATUS(Request $request)
    {
        $request->validate([
            'PLATE_API_STATUS' => 'required|string',
        ]);

        $token = $request->input('PLATE_API_STATUS');

        $this->updateEnv('PLATE_API_STATUS', $token);

        return response()->json(['message' => 'Status updated successfully']);
    }

    protected function updateEnv($key, $value)
    {
        $path = base_path('.env');

        if (file_exists($path)) {
            $env = file_get_contents($path);
            $escapedValue = '"' . addslashes($value) . '"';
            $keyExists = preg_match("/^{$key}=.*/m", $env);

            if ($keyExists) {
                $env = preg_replace("/^{$key}=.*/m", "{$key}={$escapedValue}", $env);
            } else {
                $env .= "\n{$key}={$escapedValue}";
            }

            file_put_contents($path, $env);

            // Clear the config cache
            Artisan::call('optimize:clear');
        }
    }
}
