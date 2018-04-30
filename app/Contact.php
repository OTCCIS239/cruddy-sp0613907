<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contact';
  protected $fillable = [
    //any items editable in your database go here
    'message',
];
}
