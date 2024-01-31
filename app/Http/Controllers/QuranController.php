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
        $surahTranslate = $this->translateSurah($surahNumber); 
    
        $client = new Client();
        $surahResponse = $client->get('https://api.alquran.cloud/v1/surah/' . $surahNumber, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);        
    
        $surahData = json_decode($surahResponse->getBody(), true);
        return view('surah', ['surahData' => $surahData, 'surahTranslate' => $surahTranslate]);
    }


    public function translateSurah($surahNumber){
        $client = new Client();
        $surahResponse = $client->get("https://api.alquran.cloud/v1/surah/$surahNumber/editions/id.indonesian", [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
    
        $surahTranslate = json_decode($surahResponse->getBody(), true);
        return $surahTranslate; // Return the decoded JSON data
    }
}
