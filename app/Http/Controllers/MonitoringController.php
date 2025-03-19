<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MonitoringController extends Controller
{
    public function index()
    {
        $apiKey = 'IAAR5TZIKMYKCJLQ';  // Ganti dengan API Key ThingSpeak Anda
        $channelId = '2665966';       // Ganti dengan Channel ID ThingSpeak Anda

        // Ambil data dari ThingSpeak menggunakan HTTP client
        $response = Http::get("https://api.thingspeak.com/channels/$channelId/feeds.json?api_key=$apiKey");

        // Cek apakah request berhasil
        if ($response->successful()) {
            $data = $response->json();
            $feeds = $data['feeds'] ?? [];  // Gunakan operator null coalescing untuk memastikan $feeds tidak null

            // Kirim data ke view dashboard
            return view('dashboard', compact('feeds')); // Menggunakan compact untuk mengirim $feeds ke view
        } else {
            // Jika gagal mendapatkan data, tampilkan error atau data kosong
            return view('dashboard', ['feeds' => []]);
        }
    }
}
