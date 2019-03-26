<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 25/03/2019
 * Time: 23:21
 */

namespace App\Http\Controllers;


use App\Beer;

class BeerSummaryController extends Controller
{
    public function getIndex()
    {
        $beers = Beer::getAllBeers()->paginate(6);

        return view('beer.summaryData.index', ['beers' => $beers]);
    }

    public function getBeer($id)
    {
        $beer = Beer::getABeer($id);

        return view('beer.summaryData.detail', ['beer' => $beer]);
    }
}