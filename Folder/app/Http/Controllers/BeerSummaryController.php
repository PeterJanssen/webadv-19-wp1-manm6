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
        $beers = Beer::query()
            ->orderBy('name', 'asc')
            ->paginate(6);

        return view('beer.summaryData.index', ['beers' => $beers]);
    }

    public function getBeer($id)
    {
        $beer = Beer::query()
            ->find($id);

        return view('beer.summaryData.detail', ['beer' => $beer]);
    }
}