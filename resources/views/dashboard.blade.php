@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Deskripsi Sistem Monitoring Kualitas Air -->
    <div style="font-family: 'Poppins', sans-serif; font-size: 18px; color: #2C3E50; line-height: 1.6; margin: 30px; background-color: #FDFDFD; padding: 25px; padding-bottom: 50px; border-radius: 15px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1); position: relative;">
        <h2 style="font-size: 28px; color: #3498DB; margin-bottom: 15px; text-align: center; position: relative;">
            Sistem Monitoring Kualitas Air
            <span style="display: block; width: 50px; height: 3px; background-color: #E74C3C; margin: 10px auto; border-radius: 2px;"></span>
        </h2>
        <p style="margin: 0; text-align: justify;">
            Sistem Monitoring Kualitas Air Berbasis IoT dengan Parameter pH, Suhu, dan Kekeruhan adalah solusi modern yang memanfaatkan teknologi Internet of Things (IoT) untuk memantau dan mengontrol kualitas air secara real-time.
            Sistem ini memungkinkan pengukuran otomatis terhadap nilai pH, suhu, dan tingkat kekeruhan.
        </p>
    </div>

   
    <!-- Grafik pH -->
    <div class="mb-8">
        <div class="text-center mb-4">
            <h1 class="font-serif text-4xl font-bold text-blue-600">pH Air</h1>
        </div>        
        <div class="flex justify-center">
            <iframe 
                width="450" 
                height="260" 
                style="border: none; border-radius: 12px; box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.3); overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease, margin 0.3s ease; padding: 10px; margin-top: 10px; margin-bottom: 10px;" 
                onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0px 10px 20px rgba(0, 0, 0, 0.5)'; this.style.marginTop='5px'; this.style.marginBottom='5px';" 
                onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 6px 16px rgba(0, 0, 0, 0.3)'; this.style.marginTop='10px'; this.style.marginBottom='10px';" 
                src="https://thingspeak.com/channels/2665966/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">
            </iframe>
        </div>
    </div>

    <!-- Grafik Suhu -->
    <div class="mb-8">
        <div class="text-center mb-4">
            <h1 class="font-serif text-4xl font-bold text-blue-600">Suhu Air</h2>
        </div>
        <div class="flex justify-center">
            <iframe 
                width="450" 
                height="260" 
                style="border: none; border-radius: 12px; box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.3); overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease, margin 0.3s ease; padding: 10px; margin-top: 10px; margin-bottom: 10px;" 
                onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0px 10px 20px rgba(0, 0, 0, 0.5)'; this.style.marginTop='5px'; this.style.marginBottom='5px';" 
                onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 6px 16px rgba(0, 0, 0, 0.3)'; this.style.marginTop='10px'; this.style.marginBottom='10px';" 
                src="https://thingspeak.com/channels/2665966/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">
            </iframe>
        </div>
    </div>

    <!-- Grafik Kekeruhan -->
    <div class="mb-8">
        <div class="text-center mb-4">
            <h1 class="font-serif text-4xl font-bold text-blue-600">Kekeruhan Air</h2>
        </div>
        <div class="flex justify-center">
            <iframe 
                width="450" 
                height="260" 
                style="border: none; border-radius: 12px; box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.3); overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease, margin 0.3s ease; padding: 10px; margin-top: 10px; margin-bottom: 10px;" 
                onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0px 10px 20px rgba(0, 0, 0, 0.5)'; this.style.marginTop='5px'; this.style.marginBottom='5px';" 
                onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0px 6px 16px rgba(0, 0, 0, 0.3)'; this.style.marginTop='10px'; this.style.marginBottom='10px';" 
                src="https://thingspeak.com/channels/2665966/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">
            </iframe>
        </div>
    </div>

    <div class="bg-gray-900 text-white p-6 rounded-lg shadow-lg">
        <!-- Judul -->
        <h1 class="text-center font-serif text-4xl font-bold mb-6  text-blue-600">Parameter Air</h1>
    
        <!-- Grid untuk Sensor -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center">
<!-- pH -->
<div class="flex items-center gap-4 px-6 py-4 h-32 rounded-lg font-bold text-white border-2"
     style="background-color: 
            {{ $ph < 6 ? '#3498DB' : ($ph > 8 ? '#E74C3C' : '#2ECC71') }};
            border-color: {{ $ph < 6 ? '#3498DB' : ($ph > 8 ? '#E74C3C' : '#2ECC71') }};
            border-width: 6px;">
    <i class="fas fa-flask text-4xl"></i> <!-- Ikon untuk pH -->
    <span class="text-xl">pH: {{ number_format($ph, 2) }}</span>
</div>

<!-- Suhu -->
<div class="flex items-center gap-4 px-6 py-4 h-32 rounded-lg font-bold text-white border-2"
     style="background-color: 
            {{ $suhu < 20 ? '#3498DB' : ($suhu > 28 ? '#E74C3C' : '#2ECC71') }};
            border-color: {{ $suhu < 20 ? '#3498DB' : ($suhu > 28 ? '#E74C3C' : '#2ECC71') }};
            border-width: 6px;">
    <i class="fas fa-thermometer-half text-4xl"></i> <!-- Ikon untuk Suhu -->
    <span class="text-xl">Suhu: {{ number_format($suhu, 2) }} °C</span>
</div>

<!-- Kekeruhan -->
<div class="flex items-center gap-4 px-6 py-4 h-32 rounded-lg font-bold text-white border-2"
     style="background-color: 
            {{ $kekeruhan > 25 ? '#E74C3C' : '#2ECC71' }};
            border-color: {{ $kekeruhan > 25 ? '#E74C3C' : '#2ECC71' }};
            border-width: 6px;">
    <i class="fas fa-water text-4xl"></i> <!-- Ikon untuk Kekeruhan -->
    <span class="text-xl">Turb: {{ number_format($kekeruhan, 2) }} NTU</span>
</div>


        </div>
    </div>


    @if(session('error'))
        <div class="mt-6 text-center text-red-600">
            <p>{{ session('error') }}</p>
        </div>
    @endif
</div>

<footer class="bg-gray-800 text-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <h2 class="text-lg font-semibold mb-4">About Simoka</h2>
                <p class="text-sg">
                    Simoka is a water quality monitoring system based on the internet of things, with internet of things technology it can make it easier for fish farmers to monitor the quality of fish water.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Quick Links</h2>
                <ul class="space-y-2">
                    <li><a href="." class="hover:text-gray-400 transition">Dasshboard</a></li>

                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Contact Us</h2>
                <ul class="space-y-2 text-sm">
                    <li>Email: <a href="mailto:info@simoka.com" class="hover:text-gray-400 transition">imammalik927@gmail.com</a></li>
                    <li>Phone: <a href="tel:+123456789" class="hover:text-gray-400 transition">+62 858 1004 5307</a></li>
                    <li>Address: Jawa Tengah, Pekalongan, Sragi</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Follow Us</h2>
                <div class="flex space-x-4">
                     <!-- Twitter -->
        <a href="#" class="text-gray-400 hover:text-gray-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.723-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-2.717 0-4.918 2.201-4.918 4.917 0 .385.044.76.128 1.122-4.083-.205-7.702-2.16-10.126-5.132-.423.725-.666 1.562-.666 2.456 0 1.69.861 3.179 2.173 4.055-.8-.025-1.554-.246-2.21-.616v.062c0 2.361 1.679 4.33 3.911 4.779-.409.111-.841.171-1.287.171-.314 0-.618-.03-.916-.086.619 1.934 2.417 3.338 4.55 3.377-1.666 1.305-3.765 2.082-6.045 2.082-.392 0-.779-.023-1.161-.068 2.156 1.384 4.716 2.192 7.471 2.192 8.966 0 13.872-7.432 13.872-13.872 0-.211-.004-.423-.014-.634.952-.686 1.779-1.545 2.436-2.523z" />
            </svg>
        </a>
        
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/imam-maliki-aa3484227/" class="text-gray-400 hover:text-gray-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.675 0h-21.35c-.736 0-1.325.589-1.325 1.325v21.351c0 .735.589 1.324 1.325 1.324h21.351c.736 0 1.324-.589 1.324-1.325v-21.351c0-.736-.589-1.325-1.325-1.325zm-14.69 20.264h-3.872v-10.607h3.872v10.607zm-1.936-12.264c-1.241 0-2.25-1.009-2.25-2.25s1.009-2.25 2.25-2.25 2.25 1.009 2.25 2.25-1.009 2.25-2.25 2.25zm14.626 12.264h-3.872v-5.782c0-1.379-.027-3.154-1.922-3.154-1.923 0-2.217 1.503-2.217 3.059v5.877h-3.872v-10.607h3.718v1.45h.053c.518-.979 1.782-2.01 3.671-2.01 3.926 0 4.648 2.584 4.648 5.945v5.222z" />
            </svg>
        </a>

        <!-- TikTok -->
        <a href="https://www.tiktok.com/@liks4s?_t=ZS-8t6pSCBC9Za&_r=1" class="text-gray-400 hover:text-gray-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.265 4.018a8.827 8.827 0 0 0-2.86-.48c-1.412 0-2.794.26-4.042.744v3.906c0 1.66-.692 3.234-1.918 4.288-1.126 1.054-2.59 1.51-4.07 1.25V8.75a6.028 6.028 0 0 0 1.38-.1c-.426-1.55-1.867-2.657-3.654-2.657-1.878 0-3.268 1.203-3.268 2.863s1.39 2.863 3.268 2.863c.801 0 1.56-.34 2.12-.92v3.496c-3.804.65-6.89 3.855-6.89 7.35 0 4.1 3.14 7.44 7.03 7.43a7.09 7.09 0 0 0 4.42-1.47c1.365-.94 2.504-2.2 3.32-3.724v-8.48c1.452-.474 2.58-1.63 3.36-3.036.636-1.413.98-2.946.98-4.565-.023-.4-.07-.76-.13-1.18z"/>
            </svg>
        </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-gray-700 mt-8 pt-4 text-center text-sm">
            &copy; 2025 Simoka. All rights reserved.
        </div>
    </div>
</footer>

@endsection
