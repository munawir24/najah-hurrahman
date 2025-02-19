<?php

use Carbon\Carbon;
use App\Models\Galery;
use App\Models\Landing;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Models\Sertifikat;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('beranda');
// });
Route::get('/', function (Request $request) {
    $ip = $request->ip();

    if (!Visitor::where('ip_address', $ip)->exists()) {
        Visitor::create(['ip_address' => $ip]);
    }
    $landing = Landing::where('status', 1)->get();
    $galery = Galery::where('status', 1)->get();
    return view('beranda', compact('landing', 'galery'));
});
Route::get('/profile', function (Request $request) {
    $ip = $request->ip();

    if (!Visitor::where('ip_address', $ip)->exists()) {
        Visitor::create(['ip_address' => $ip]);
    }
    $sertifikat = Sertifikat::where('status', 1)->get();
    return view('profile', compact('sertifikat'));
});
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'baca'])->name('baca-berita');
