<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ShowController extends Controller
{
    public function index()
    {
        return view('test', ['response' => null]);
    }

    public function fetch()
    {
        try {
            $response = Http::get('http://localhost:5176/opcua');

            $data = $response->json();

            return view('test', [
                'response' => json_encode($data, JSON_PRETTY_PRINT)
            ]);
        } catch (\Exception $e) {
            return view('test', [
                'response' => 'Error: ' . $e->getMessage()
            ]);
        }
    }
}
