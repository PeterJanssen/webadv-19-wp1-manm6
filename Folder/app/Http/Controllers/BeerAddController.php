<?php
/**
 * Created by PhpStorm.
 * User: destan
 * Date: 31/03/2019
 * Time: 11:03
 */


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Beer;

class BeerAddController extends Controller
{


    public function postAddBeer(Request $request)
    {
        $this->validate($request,[ 'name' => 'required|min:3|string',
                            'description' => 'required|min:10|string',
                            'price' => 'required|min:0|numeric',
                             'alcohol' => 'required|min:0|numeric|max:99']);

        $beer = new Beer(['name'=> $request->input(['name']),
                          'description'=> $request->input(['description']) ,
                           'price' =>$request->input(['price']),
                            'alcohol' => $request->input(['alcohol'])
                            ]);

        if ($request->hasFile('image_file')) {
            $beer->image_base64_uri = base64_encode(file_get_contents($request->file('image_file')));
        }

        $beer->save();

        return redirect()->route('addData.index')->with($beer->name. ' is added to db');


    }

}