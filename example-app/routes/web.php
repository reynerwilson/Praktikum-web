<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;

// File routes/web.php
Route::get('/', function () {
    // Menampilkan form untuk mengisi data penduduk
    return view('form');
});

Route::post('/show', function (Request $request) {
    // Menampilkan data penduduk di halaman dashboard admin
    return view('tampilan', [
        'nik' => $request->input ('nik'),
        'nama' => $request->input ('nama'),
        'provinsi' => $request->input ('provinsi'),
        'kota' => $request->input ('kota'),
        'nomor_telpon' => $request->input ('nomor_telpon')
    ]);
})->name('store');