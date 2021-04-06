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

// Route::get('hello', function () {
//     return view('pages/hello');
// });

// Route::get('hello/{name}', function ($name) {
//     return "bienvenue ! $name";
// });
// Route::get('article/{url}-{id}', function ($url, $id) {
//     return "Mon article a l'url: $url et l'id: $id";
// })->where('url', '[a-z0-9/-]+')->where('id', '[0-9]+');


route::get('profile', 'profileController@index'); 


Route::get('/', function () {
    return view('welcome');
});
