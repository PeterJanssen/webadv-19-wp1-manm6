<?php

namespace App\Http\Controllers;

use App\Beer;
use App\Http\Requests\UpdateBeer;


class BeerUpdateController extends Controller
{

    public function getBeersToUpdate()
    {
        $beers = Beer::getAllBeers()->paginate(6);

        return view('beer.updateData.index', ['beers' => $beers]);
    }

    public function getBeerToEdit($id)
    {
        $beer = Beer::getABeer($id);

        return view('beer.updateData.updateBeer', ['beer' => $beer, 'beerId' => $id]);
    }

    public function postUpdatedBeer(UpdateBeer $request)
    {
        $request->validate();
        $beer = Beer::getABeer($request->input(['id']));

        $beer->name = $request->input(['name']);
        $beer->description = $request->input(['description']);
        $beer->price = $request->input(['price']);
        $beer->alcohol = $request->input(['alcohol']);

        if ($request->hasFile('image_file')) {
            $beer->image_base64_uri = base64_encode(file_get_contents($request->file('image_file')));
        }
        $beer->save();

        return redirect()->route('updateData.index')->with('info', 'Beer, ' . $beer->name . ' updated');
    }

}
