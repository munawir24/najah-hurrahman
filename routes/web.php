<?php

use Carbon\Carbon;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    $now = Visitor::whereDate('created_at', Carbon::today())->get();
    $dayCount = count($now);
    $visitorCount = Visitor::count();
    return view('beranda', compact('visitorCount','dayCount'));
});
Route::get('/profile', function () {
    return view('profile');
});