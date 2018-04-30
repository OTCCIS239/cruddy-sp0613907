<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
    //any items editable in your database go here
    'fname',
    'lname',
    'email',
    'password',
    'line1',
    'line2',
    'city',
    'state',
    'zip',
];
}
