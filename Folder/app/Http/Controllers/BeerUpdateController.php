<?php

namespace App\Http\Controllers;

use App\Beer;
use App\Http\Requests\UpdateBeer;


class BeerUpdateController extends Controller
{

    public function getBeersToUpdate()
    {
        $beers = Beer::query()->orderby('name', 'asc')->paginate(6);
        return view('beer.updateData.index', ['beers' => $beers]);
    }

    public function getBeerToEdit($id)
    {
        $beer = Beer::query()->find($id);
        return view('beer.updateData.updateBeer', ['beer' => $beer, 'beerId' => $id]);
    }

    public function postUpdatedBeer(UpdateBeer $request)
    {
        $request->validate();
        $beer = Beer::query()->find($request->input(['id']));
        $beer->name = $request->input(['name']);
        $beer->description = $request->input(['description']);
        $beer->price = $request->input(['price']);
        $beer->alcohol = $request->input(['alcohol']);

        if ($request->hasFile('image_file')) {
            $beer->image_file = base64_encode(file_get_contents($request->file('image_file')));
        }
        $beer->save();
        return redirect()->route('updateData.index')->with('info', 'Beer edited, new Name is: ' . $request->input('name'));
    }

}
