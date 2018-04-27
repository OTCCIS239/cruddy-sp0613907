<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
      //any items editable in your database go here
      'name',
      'description',
      'price',
  ];
}
