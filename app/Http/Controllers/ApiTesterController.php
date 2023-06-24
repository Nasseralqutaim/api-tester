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

        $http = Http::withOptions(['http_errors' => false]);

        $response = $http->send($method, $url);

        $responseBody = json_decode((string) $response->body(), true);

        // Store the response in the session
        session([
            'status' => $response->status(),
            'headers' => $response->headers(),
            'body' => $responseBody
        ]);

        // Redirect back to the form
        return redirect('/');
    }
}
