<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
}); 
Route::get("/riwayat", function () {    
    return view("riwayat");
});

Route::get("/profile", function () {    
    return view("profile");
});


// Route utama
Route::get('/vote', function () {
    return view('vote.peserta'); // Redirect ke halaman pertama
});

// Route untuk tiap step
Route::get('/vote/peserta', function () {
    return view('vote.peserta');
});
Route::get('/vote/paket-wisata', function () {
    return view('vote.paket');
});
Route::get('/vote/kaos', function () {
    return view('vote.kaos');
});
Route::get('/vote/hasil', function () {
    return view('vote.hasil');
});



require __DIR__.'/settings.php';
