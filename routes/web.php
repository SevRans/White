<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/VuePosts', function(){
    return view ('testVueJs');
});
Route::get('/testJS', function () {
    return view('/testJS');
});
Route::get('/testVueJS', function () {
    return view('/testVueJS');
})->name('testVue');

Route::get('/createVueJs', function () {
    return view('.createVueJs');
});
Route::get('/VueModel', function () {
    return view('.VueModel');
});

Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


