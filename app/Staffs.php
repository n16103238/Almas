<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
  protected $fillable = [
       'name',
       'phone',
       'position',
       'salary',
       'gender',
       'address',

   ];
   function staffs()
    {
      return $this->hasOne('App\Staffs','id','user_id');
    }
}
