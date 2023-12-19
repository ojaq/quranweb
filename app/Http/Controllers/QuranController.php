<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    public function index(){
        $client = new Client();
        $quranResponse = $client->get('https://api.alquran.cloud/v1/meta', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);

        $quranData = json_decode($quranResponse->getBody(), true);
        return view('index', ['quranData' => $quranData]);
    }

    public function detailSurah($surahNumber){
        if (!is_numeric($surahNumber) || $surahNumber < 1 || $surahNumber > 114) {
            abort(404, 'Surah not found');
        }
    
        $client = new Client();
        $surahResponse = $client->get('https://api.alquran.cloud/v1/surah/' . $surahNumber, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);        

        $surahData = json_decode($surahResponse->getBody(), true);
        return view('surah', ['surahData' => $surahData]);
    }
}
