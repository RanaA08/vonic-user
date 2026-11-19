<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vonic - Piknik DTEDI 2026</title>
    
    <!-- Panggil CSS -->
    <link rel="stylesheet" href="{{ asset('css/vote.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="img/LogoVonic.png" alt="Logo Vonic" class="logo-img">
            <span class="title">Piknik DTEDI Periode 2026</span>
        </div>
    </header>

    <div class="container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <a href="/">
                <i class="fa-solid fa-xmark"></i> Batalkan
            </a>
            
            <nav class="nav-menu">
                <!-- Cek jika URL saat ini adalah peserta -->
                <a href="{{ route('vote.peserta') }}" class="nav-item {{ Request::is('vote/peserta') ? 'active' : '' }}" style="text-decoration:none;">
                    @if(Request::is('vote/paket', 'vote/kaos', 'vote/hasil')) <i class="fa-solid fa-check"></i> @endif
                    Peserta
                </a>
                
                <a href="{{ route('vote.paket') }}" class="nav-item {{ Request::is('vote/paket') ? 'active' : '' }}" style="text-decoration:none;">
                    @if(Request::is('vote/kaos', 'vote/hasil')) <i class="fa-solid fa-check"></i> @endif
                    Paket Wisata
                </a>
                
                <a href="{{ route('vote.kaos') }}" class="nav-item {{ Request::is('vote/kaos') ? 'active' : '' }}" style="text-decoration:none;">
                    @if(Request::is('vote/hasil')) <i class="fa-solid fa-check"></i> @endif
                    Kaos
                </a>
                
                <a href="{{ route('vote.hasil') }}" class="nav-item {{ Request::is('vote/hasil') ? 'active' : '' }}" style="text-decoration:none;">
                    Hasil akhir
                </a>
            </nav>

            <div class="info-box">
                <i class="fa-solid fa-circle-info"></i>
                <p>Suara Anda bersifat rahasia dan hanya dapat diberikan satu kali. Mohon perhatikan dan pertimbangkan pilihan Anda dengan cermat sebelum mengirimkan suara.</p>
            </div>
        </aside>

        <!-- Area Konten yang berubah-ubah -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>

    <!-- Panggil JS -->
    <script src="{{ asset('js/vote.js') }}"></script>
</body>
</html>