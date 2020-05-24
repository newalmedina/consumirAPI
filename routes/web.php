<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $respuesta = Http::get('https://mindicador.cl/api');
    $dolar =   $respuesta->json();

    //$respuesta2 = Http::get('http://jsonplaceholder.typicode.com/posts');
    $respuesta2 = Http::get(asset('apiposts.json'));
    $mensajes =   $respuesta2->json();

    return view('welcome', compact('dolar', 'mensajes'));
});
