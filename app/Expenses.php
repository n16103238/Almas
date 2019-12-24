<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
  protected $fillable = [
       'name',
       'phone',
       'position',
       'salary',
       'gender',
       'address',

   ];
   function expenses()
    {
      return $this->hasOne('App\Expenses','id','user_id');
    }
}
