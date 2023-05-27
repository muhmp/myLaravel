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
    return view('welcome');
});


//  About page
Route::get('/about', function () {
    return view('about');
});

// Posts
Route::get('/posts', function () {
    return "<h1>main posts</h1>";
});

// Posts 1
Route::get('/posts/1', function () {
    return "<h1>Posts 1</h1>";
});

// post 1, 2, 3 ...
Route::get('/posts/{$id}', function ($id) {
    return '<h1>' . $id .  'text';
});
