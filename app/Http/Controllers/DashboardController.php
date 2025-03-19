<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        // Mengambil data terbaru dari ThingSpeak
        $response = Http::get('https://api.thingspeak.com/channels/2665966/feeds.json', [
            'api_key' => 'IAAR5TZIKMYKCJLQ',
            'results' => 1 // Mengambil hanya 1 data feed terbaru
        ]);

        // Memeriksa jika respons valid
        if ($response->successful()) {
            // Ambil data feeds dari API response
            $feeds = $response->json()['feeds'];

            // Pastikan ada feed yang diterima
            if (!empty($feeds)) {
                $lastFeed = $feeds[0]; // Ambil feed terakhir
                return view('dashboard', [
                    'ph' => $lastFeed['field1'],
                    'suhu' => $lastFeed['field2'], // Asumsi field2 adalah suhu
                    'kekeruhan' => $lastFeed['field3'], // Asumsi field3 adalah kekeruhan
                ]);
            }
        }

        return view('dashboard')->with('error', 'No data available');
    }
}
