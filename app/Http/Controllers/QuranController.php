<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    public function index(){
        $apiKey = '';
        $client = new Client();

        $qResponse = $client->get('https://api.alquran.cloud/v1/meta', [
            'headers' => [
                'Content-Type' => 'application/json',
                'X-API-Key' => $apiKey,
            ],
        ]);

        $qData = json_decode($qResponse->getBody(), true);
        return view('index', ['qData' => $qData]);
    }
}
