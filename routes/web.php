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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/downloads', function () {
    return view('downloads');
});

Route::get('/members', function () {
    return view('members');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/news', function () {
    $news = DB::table('news')->get();
    return view('news',[
        'news' => $news
    ]);
});