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
    return view('home');
})->name('home');

Route::group(['prefix' => 'beer'], function () {
    Route::get('', function () {
        return view('beer.summaryData.index');
    })->name('summaryData.index');

    Route::get('add', function () {
        return view('beer.addData.index');
    })->name('addData.index');

    Route::get('delete', function () {
        return view('beer.deleteData.index');
    })->name('deleteData.index');

    //Routes to use when updating a beer
    Route::get('Update existing beers', [
        'uses' => 'BeerUpdateController@getBeersToUpdate',
        'as' => 'updateData.index'
    ]);

    Route::get('Update existing beer/{id}', [
        'uses' => 'BeerUpdateController@getBeerToEdit',
        'as' => 'updateData.updateBeer'
    ]);

    Route::post('Posting new beer', [
        'uses' => 'BeerUpdateController@postUpdatedBeer',
        'as' => 'Confirm update'
    ]);
    //End of routes to use when updating a beer
});







