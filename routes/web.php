<?php

use App\Http\Controllers\SendUsersMessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Main
Route::view('', 'pages.main.index')->name('main');

// Pages_detailed
Route::view('roblox_junior', 'pages.pages_detailed.roblox_junior')->name('roblox_junior');
Route::view('python_junior', 'pages.pages_detailed.python_junior')->name('python_junior');
Route::view('unity_junior', 'pages.pages_detailed.unity_junior')->name('unity_junior');
Route::view('web_junior', 'pages.pages_detailed.web_junior')->name('web_junior');
Route::view('roblox_middle', 'pages.pages_detailed.roblox_middle')->name('roblox_middle');
Route::view('python_middle', 'pages.pages_detailed.python_middle')->name('python_middle');
Route::view('use', 'pages.pages_detailed.use')->name('use');
Route::view('ai_middle', 'pages.pages_detailed.ai_middle')->name('ai_middle');
Route::view('ai_junior', 'pages.pages_detailed.ai_junior')->name('ai_junior');
Route::view('web_middle', 'pages.pages_detailed.web_middle')->name('web_middle');
Route::view('unity_middle', 'pages.pages_detailed.unity_middle')->name('unity_middle');

// Politics
Route::view('privacy_policy', 'pages.politics.privacy_policy')->name('privacy_policy');
Route::view('user_agreement', 'pages.politics.user_agreement')->name('user_agreement');
Route::view('contract_offer', 'pages.politics.contract_offer')->name('contract_offer');

// Страница логина
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Страница сообщений — только после логина
Route::get('/messages', [SendUsersMessageController::class, 'list_output'])
    ->middleware('admin.auth')
    ->name('messages.index');

// Post Send Users Messages
Route::post('/send-message', [SendUsersMessageController::class, 'store'])->name('send.message');