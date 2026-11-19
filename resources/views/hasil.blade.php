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
        <span class="step-badge">4/4</span>
        <h2>Hasil Akhir</h2>
    </div>

    <div class="card result-container">
        <!-- Konten layout Hasil Akhir (Persis seperti kode HTML sebelumnya) -->
        <div class="result-layout">
            <div class="result-labels">
                <div class="label-box">Peserta</div>
                <div class="label-box mt-20">Paket Wisata</div>
                <div class="label-box mt-100">Kaos</div>
            </div>
            
            <div class="result-data">
                <div class="data-box">Dosen dan Tenaga Didik DTEDI <strong>dipisah.</strong></div>
                
                <div class="wisata-card mt-10" style="width: 100%;">
                    <!-- (Potongan kode card wisata untuk preview) -->
                </div>

                <div class="kaos-result mt-20" style="display: flex; gap: 20px;">
                    <!-- (Potongan kode card kaos untuk preview) -->
                </div>
            </div>
        </div>
    </div>

    <div class="action-footer space-between">
        <a href="{{ route('vote.kaos') }}" class="btn-outline" style="text-decoration:none;"><i class="fa-solid fa-arrow-left"></i> Sebelumnya</a>
        
        <!-- Tombol Submit (Bisa berupa <button> jika dibungkus form) -->
        <form action="{{ route('vote.submit') }}" method="POST">
            @csrf
            <button type="submit" class="btn-submit">Submit <i class="fa-solid fa-arrow-right"></i></button>
        </form>
    </div>
@endsection
</body>
</html>