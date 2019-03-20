<?php

namespace App\Http\Controllers;

use App\Beer;
use Faker\Provider\Image;
use Illuminate\Http\Request;


class BeerUpdateController extends Controller
{

    public function getBeersToUpdate()
    {
        $beers = Beer::query()->orderby('name', 'asc')->get();
        return view('beer.updateData.index', ['beers' => $beers]);
    }

    public function getBeerToEdit($id)
    {
        $beer = Beer::query()->find($id);
        return view('beer.updateData.updateBeer', ['beer' => $beer, 'beerId' => $id]);
    }

    public function postUpdatedBeer(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|alpha_dash',
            'description' => 'required|min:10|alpha_dash',
            'price' => 'required|min:0|numeric',
            'alcohol' => 'required|min:0|numeric|max:99',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $beer = Beer::query()->find($request->input(['id']));
        $beer->name = $request->input(['name']);
        $beer->description = $request->input(['description']);
        $beer->price = $request->input(['price']);
        $beer->alcohol = $request->input(['alcohol']);

        if ($request->hasFile('image')) {
            $beer->image = $request->file('image');
        }
        $beer->save();
        return redirect()->route('updateData.index')->with('info', 'Beer edited, new Name is: ' . $request->input('name'));
    }

}
