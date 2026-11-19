<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<link rel="stylesheet" href="{{ asset('css/vote.css') }}">
<script src="{{ asset('js/vote.js') }}"></script>

<body>
    @extends('vote')

@section('content')
    <div class="section-header">
        <span class="step-badge">2/4</span>
        <h2>Paket Wisata</h2>
    </div>

    <div class="card">
        <div class="question">
            <h4>Silahkan memilih paket wisata yang diinginkan.</h4>
        </div>

        <div class="filter-bar">
            <button class="filter-btn">Jarak <i class="fa-solid fa-arrow-down-up-across-line"></i></button>
            <button class="filter-btn">Lama Perjalanan <i class="fa-solid fa-arrow-down-up-across-line"></i></button>
            <button class="filter-btn">Daerah <i class="fa-solid fa-chevron-down"></i></button>
            <button class="filter-btn">Kategori <i class="fa-solid fa-chevron-down"></i></button>
        </div>

        <div class="grid-2">
            <!-- Card Paket 1 (Lengkapi hingga 4 card sesuai desain) -->
            <div class="wisata-card">
                <label class="radio-card mb-10">
                    <input type="radio" name="paket" value="pantai1">
                    <span class="custom-radio"></span>
                    <span class="radio-text text-blue">Pantai Lorem Ipsum</span>
                </label>
                <div class="img-grid">
                    <img src="https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?w=500&q=80" alt="Pantai">
                    <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?w=500&q=80" alt="Pantai">
                    <div class="img-overlay">+2</div>
                </div>
                <div class="card-body">
                    <div class="rating"><i class="fa-solid fa-star text-yellow"></i> 4,8 <span class="right-text">Dikunjungi: 2</span></div>
                    <div class="info-row"><span class="label">Lokasi</span> <span class="value">Pantai Kartini, Jepara, Jawa Tengah.</span></div>
                    <div class="info-row"><span class="label">Jarak</span> <span class="value">120 Km</span></div>
                    <div class="info-row"><span class="label">Lama Perjalanan</span> <span class="value">2 Hari</span></div>
                    <div class="info-row"><span class="label">Benefit:</span> 
                        <ul class="benefit-list">
                            <li>Bis.</li>
                            <li>Makan.</li>
                            <li>Minum.</li>
                            <li>Kamar 2 hari.</li>
                        </ul>
                    </div>
                </div>
                <div class="price">Rp 500.000</div>
            </div>
            
            <!-- Duplikasi div .wisata-card di atas untuk paket 2, 3, dan 4 -->
        </div>
    </div>

    <div class="action-footer space-between">
        <a href="{{ route('vote.peserta') }}" class="btn-outline" style="text-decoration:none;"><i class="fa-solid fa-arrow-left"></i> Sebelumnya</a>
        <a href="{{ route('vote.kaos') }}" class="btn-next" style="text-decoration:none;">Selanjutnya <i class="fa-solid fa-arrow-right"></i></a>
    </div>
@endsection
</body>
</html>