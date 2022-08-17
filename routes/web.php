<?php
use App\Http\Controllers\consumirapiController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/waterpark', function () {
    return view('waterpark');
});

Route::get('/hospedagem', function () {
    return view('hospedagem');
});

Route::get('/taxi', function () {
    return view('taxi');
});

Route::get('/entrar', function () {
    return view('entrar');
});

// Route::get('/auth/google/redirect', function () {
//     return Socialite::driver('google')->redirect();
// });

// Route::get('/auth/google/call-back', function () {
//     $user = Socialite::driver('google')->user();
//     dd($user->getName(), $user->getEmail(), $user->getId());
//     // $user->token
// });

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('/adicionarcorridas', [consumirapiController::class, 'adicionarcorridas']);

