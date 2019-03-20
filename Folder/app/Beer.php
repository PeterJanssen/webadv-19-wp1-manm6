<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['id', 'name', 'description', 'price', 'alcohol', 'image'];

}