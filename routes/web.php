<?php

use App\Models\Buku;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mike Wazowski",
        "email" => "mikewazowski@gmail.com",
        "image" => "mike.png"
    ]);
});

Route::get('/create', function () {
    return view('create', [
        "title" => "Create"
    ]);
});

Route::get('/blog', [BukuController::class, 'index']);
Route::get('posts/{post:slug}', [BukuController::class, 'show']);
Route::resource('/layouts/blog', BukuController::class)->middleware('auth');