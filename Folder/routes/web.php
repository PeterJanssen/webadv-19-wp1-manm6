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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::group(['prefix' => 'beers'], function () {

    Route::get('', [
        'uses' => 'BeerSummaryController@getIndex',
        'as' => 'summaryData.index'
    ]);

    Route::get('{id}', [
        'uses' => 'BeerSummaryController@getBeer',
        'as' => 'summaryData.detail'
    ]);
});

Route::get('add', function () {
    return view('beer.addData.index');
})->name('addData.index');

Route::get('delete', function () {
    return view('beer.deleteData.index');
})->name('deleteData.index');

//Routes to use when updating a beer
Route::get('existing_beers', [
    'uses' => 'BeerUpdateController@getBeersToUpdate',
    'as' => 'updateData.index'
]);

Route::get('update_form/{id}', [
    'uses' => 'BeerUpdateController@getBeerToEdit',
    'as' => 'updateData.updateBeer'
]);

Route::post('Posting_new_beer', [
    'uses' => 'BeerUpdateController@postUpdatedBeer',
    'as' => 'Confirm update'
]);





