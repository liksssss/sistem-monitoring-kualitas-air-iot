<!-- resources/views/components/card.blade.php -->
<div class="card">
    <div class="card-header">
        <h5>{{ $title }}</h5>
    </div>
    <div class="card-body">
        {{ $slot }}  <!-- Bagian slot ini akan menampilkan konten yang dikirim ke komponen -->
    </div>
</div>
