<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
  protected $fillable = [
    //any items editable in your database go here
    'name',
    'description',
    'price',
];
}
