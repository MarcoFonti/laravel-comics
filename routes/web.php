<?php

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


/* HOME */
Route::get('/', function () {
    return view('home');
})-> name('home');

/* CHARACTERS */
Route::get('/characters', function () {
    return view('link_header.characters');
})-> name('characters');

/* COMICS */
Route::get('/comics', function () {
    return view('link_header.comics');
})-> name('comics');

/* MOVIES */
Route::get('/movies', function () {
    return view('link_header.movies');
})-> name('movies');

/* TV */
Route::get('/tv', function () {
    return view('link_header.tv');
})-> name('tv');

/* GAMES */
Route::get('/games', function () {
    return view('link_header.games');
})-> name('games');

/* COLLECTIBLES */
Route::get('/collectibles', function () {
    return view('link_header.collectibles');
})-> name('collectibles');

/* VIDEOS */
Route::get('/videos', function () {
    return view('link_header.videos');
})-> name('videos');

/* FANS */
Route::get('/fans', function () {
    return view('link_header.fans');
})-> name('fans');

/* NEWS */
Route::get('/news', function () {
    return view('link_header.news');
})-> name('news');

/* SHOP */
Route::get('/shop', function () {
    return view('link_header.shop');
})-> name('shop');