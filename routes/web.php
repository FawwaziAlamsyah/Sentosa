<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\articlecontroller;

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
    return view('home',[
        "tittle" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "tittle" => "about",
        "name" => "aji",
        "email" => "palelubautai@gmail.com",
        "image" => "ganteng.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

//halman singel post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//article
Route::get('/manage/article',[articlecontroller::class,'index'])->name('manage.article');
//create
Route::get('/manage/create',[articlecontroller::class,'create'])->name('manage.create');
Route::post('/manage/store',[articlecontroller::class,'store'])->name('manage.store');
//edit
Route::get('/manage/edit/{id}',[articlecontroller::class,'edit'])->name('manage.edit');
Route::post('/manage/update/{id}',[articlecontroller::class,'update'])->name('manage.update');
//delete
Route::get('/manage/delete/{id}',[articlecontroller::class,'destroy'])->name('manage.delete');
//show
Route::get('/article/show/{id}',[articlecontroller::class,'show'])->name('article.show');