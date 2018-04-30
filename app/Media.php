<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
  protected $table = 'media';
  protected $fillable = [
    //any items editable in your database go here
    'name',
    'description',
    'media_item',
];
}
