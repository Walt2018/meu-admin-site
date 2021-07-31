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

// Route::get('/', function () {
//     return view('index');
// });


//single post
Route::get("/post/{slug}",["App\Http\Controllers\Front\PagesController","singlePost"]);
//todos posts
Route::get("/posts",["App\Http\Controllers\Front\PagesController","allPosts"]);

Route::get("/",["App\Http\Controllers\Front\HomeController","index"]);
//single page
Route::get("/pagina/{slug}",["App\Http\Controllers\Front\PagesController","index"]);

//single service
Route::get("/service/{slug}",["App\Http\Controllers\Front\PagesController","singleService"]);
//all services
Route::get("/servicos",["App\Http\Controllers\Front\PagesController","allServices"]);

//all portifolio
Route::get("/portifolio",["App\Http\Controllers\Front\PagesController","allWorks"]);
//Single portifolio
Route::get("/portifolio/{slug}",["App\Http\Controllers\Front\PagesController","singleWork"]);

Route::post("/enviar/contato",["App\Http\Controllers\Front\PagesController","sendEmail"]);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
