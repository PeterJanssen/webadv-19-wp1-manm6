<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Beer extends Model
{
    protected $fillable = ['id', 'name', 'description', 'price', 'alcohol', 'image_base64_uri'];

    public static function getAllBeers()
    {
        return DB::table('beers')->orderby('name', 'asc');
    }

    public static function getABeer($id)
    {
        return Beer::query()->findOrFail($id);
    }

}