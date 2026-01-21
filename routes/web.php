<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;

//INDEX
Route::get('/', function () {
    return view('index');
})->name('index');

//SHOP
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

//DONDE ESTAMOS
Route::get('/dondeEstamos', function(){
    return view('whereAreWe');
})->name('whereAreWe');

//LEGAL
Route::get('privacyPolice',[LegalController::class, 'privacyPolice'])->name('privacyPolice');
Route::get('termsCondition',[LegalController::class, 'termsCondition'])->name('termsCondition');

//PLAYERS ADMIN
Route::resource('players', PlayerController::class)
    ->only(['create','store','edit','update','destroy'])
    ->middleware('isAdmin');

//PLAYERS INDEX
Route::get('/players', [PlayerController::class, 'index'])
    ->name('players.index');

//PLAYERS SHOW
Route::get('/players/{player}', [PlayerController::class, 'show'])
    ->name('players.show');

//EVENTOS RESOURCE
Route::resource('events', EventController::class)
    ->only(['create','store','edit','update','destroy'])
    ->middleware('isAdmin');

//EVENTOS INDEX
Route::get('/events', [EventController::class, 'index'])
    ->name('events.index');

//EVENTOS SHOW
Route::get('/events/{event}', [EventController::class, 'show'])
->name('events.show');

//MENSAJES RESOURCE
Route::resource('messages', MessageController::class)
    ->only(['store','edit','update','destroy'])
    ->middleware('isAdmin');

//MENSAJES INDEX
Route::get('/messages', [MessageController::class, 'index'])
    ->name('messages.index');

//MENSAJES CREATE
Route::get('/messages/create', [MessageController::class, 'create'])
    ->name('messages.create');

//MENSAJES SHOW
Route::get('/messages/{mesagges}', [MessageController::class, 'show'])
    ->name('messages.show');

//LOGINS
Route::get('singup', [LoginController::class, 'singupForm'])->name('singupForm');
Route::post('singup', [LoginController::class, 'singup'])->name('singup');
Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('UserAcount', [UserController::class, 'account'])->name('users.account');

