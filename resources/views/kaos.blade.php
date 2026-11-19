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
        <span class="step-badge">3/4</span>
        <h2>Kaos</h2>
    </div>

    <div class="card">
        <div class="question">
            <h4>Silahkan memilih Desain Kaos yang diinginkan.</h4>
        </div>

        <h3 class="text-blue mb-10 mt-20">Size Chart</h3>
        <img src="https://via.placeholder.com/800x300/eee/999?text=Size+Chart+Image" alt="Size Chart" class="size-chart-img">

        <h3 class="text-blue mt-20 mb-10">Desain Kaos</h3>
        <div class="grid-3">
            <div class="kaos-card">
                <label class="radio-card mb-10">
                    <input type="radio" name="desain_kaos" value="kaosA">
                    <span class="custom-radio"></span>
                    <span class="radio-text text-blue">Kaos A</span>
                </label>
                <img src="https://images.unsplash.com/photo-1518509562904-e7ef99cdcc86?w=300&q=80" alt="Kaos A">
            </div>
            <!-- Duplikasi div .kaos-card untuk Kaos B dan C -->
        </div>

        <h3 class="text-blue mt-20 mb-10">Ukuran Kaos</h3>
        <div class="size-options">
            <label class="size-btn"><input type="radio" name="ukuran" value="S"><span>S</span></label>
            <label class="size-btn"><input type="radio" name="ukuran" value="M"><span>M</span></label>
            <label class="size-btn"><input type="radio" name="ukuran" value="XL"><span>XL</span></label>
            <label class="size-btn"><input type="radio" name="ukuran" value="XXL"><span>XXL</span></label>
            <!-- Lengkapi hingga 5XL -->
        </div>
    </div>

    <div class="action-footer space-between">
        <a href="{{ route('vote.paket') }}" class="btn-outline" style="text-decoration:none;"><i class="fa-solid fa-arrow-left"></i> Sebelumnya</a>
        <a href="{{ route('vote.hasil') }}" class="btn-next" style="text-decoration:none;">Selanjutnya <i class="fa-solid fa-arrow-right"></i></a>
    </div>
@endsection
</body>
</html>