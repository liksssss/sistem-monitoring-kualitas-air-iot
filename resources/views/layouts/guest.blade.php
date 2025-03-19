<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            
            <!-- Tambahkan Judul -->
            <div class="text-center bg-blue-50 dark:bg-blue-900 py-8 px-4 rounded-lg shadow-md">
                <h1 class="text-4xl font-extrabold text-blue-700 dark:text-blue-300 tracking-tight leading-snug">
                    Sistem Monitoring Kualitas Air <br /> pada Budidaya Ikan Hias di Desa Sumubkidul  <br /> Berbasis Internet of Things 
                </h1>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                    Solusi modern untuk menjaga kualitas air dan mendukung pertumbuhan ikan hias yang sehat.
                </p>
            </div>
            

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
