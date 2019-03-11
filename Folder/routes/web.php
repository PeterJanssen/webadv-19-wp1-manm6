<?php

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

Route::get('/beer', function () {

    $beer = DB::table('beers')->get();

    return view('beer', ['beer' => $beer]);
});

Route::get('/', function () {
    return view('welcome');
});
