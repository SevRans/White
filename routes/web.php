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

Route::get('/', function () {return view('welcome');});

Route::get('/VuePosts', function(){return view ('testVueJs');});

Route::get('/testJS', function () {return view('forTest/testJS');});

//Route::get('/testingVue', function () { return view('testingVue');})->name('testVue');
Route::view('/testingVue','testingVue')->name('testVue');

Route::get('/createVueJs', function () {
    return view('.createVueJs');
});
Route::get('/VueModel', function () {
    return view('.VueModel');
});
Route::group(
    ['prefix' => 'posts',
        'as'  =>'posts.'
    ], function () {
    Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('index');
    Route::post('store', [App\Http\Controllers\PostsController::class, 'store'])->name('store');
});
Route::group(
    ['prefix'=>'questions',
    'as'=>'questions.'
    ], function(){
    Route::get('/',[App\Http\Controllers\QuestionsController::class,'indexApi'])->name('inApi');
    Route::post('check', [\App\Http\Controllers\QuestionsController::class, 'checkAnswer'])->name('check');
    Route::post('create', [\App\Http\Controllers\QuestionsController::class, 'store'])->name('create');
});

Route::get('/test/index', [\App\Http\Controllers\AnswersController::class, 'index'])->name('test.example');
Route::get('/test/api/index', [\App\Http\Controllers\AnswersController::class, 'indexApi'])->name('test.example');
Route::get('/test/create', [\App\Http\Controllers\AnswersController::class, 'create'])->name('Answers.create');
Route::post('/test/store', [\App\Http\Controllers\AnswersController::class, 'store'])->name('Answers.store');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/account', [App\Http\Controllers\HomeController::class, 'ACC'])->name('Acc');


