<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiTesterController extends Controller
{
    public function index()
    {
        return view('api_tester');
    }

    public function testApi(Request $request)
    {
        $url = $request->input('url');
        $method = $request->input('method');

        // Prepare the HTTP request
        $http = Http::withOptions(['http_errors' => false]); // Don't throw exceptions for 4xx and 5xx responses

        // Send the HTTP request and get the response
        $response = $http->send($method, $url);

        // Return the response
        return response()->json([
            'status' => $response->status(),
            'headers' => $response->headers(),
            'body' => $response->json(),
        ]);
    }
}
