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
        <span class="step-badge">1/4</span>
        <h2>Peserta</h2>
    </div>
    
    <div class="card">
        <div class="question">
            <h4>Bagaimana rencana pembagian peserta piknik yang Anda harapkan?</h4>
            <p>Pilihan ini menentukan alokasi armada bus, pengaturan kamar hotel/villa, serta pembagian sesi santai antar civitas akademika DTEDI Sekolah Vokasi UGM.</p>
        </div>

        <div class="options">
            <label class="radio-card">
                <input type="radio" name="peserta" value="dipisah" required>
                <span class="custom-radio"></span>
                <span class="radio-text">Kelompok Dosen dan Tenaga Kependidikan (Tendik) <strong>dipisah</strong></span>
            </label>
            <label class="radio-card">
                <input type="radio" name="peserta" value="digabung">
                <span class="custom-radio"></span>
                <span class="radio-text">Kelompok Dosen dan Tenaga Kependidikan (Tendik) <strong>digabung</strong></span>
            </label>
        </div>
    </div>

    <div class="action-footer">
        <!-- Tombol Selanjutnya menggunakan Tag <a> mengarah ke Route Laravel -->
        <a href="{{ route('vote.paket') }}" class="btn-next" style="text-decoration:none;">Selanjutnya <i class="fa-solid fa-arrow-right"></i></a>
    </div>
@endsection


</body>
</html>