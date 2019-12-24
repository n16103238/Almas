<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\User;
class Profiles extends Model
{
  public $timestamps = false;
  protected $fillable = [
       'user_id',
       'Phone_number',
       'present_address',
       'parmanent_address',
       'education',
       'gender',
       'blood_group',

   ];

   function users()
    {
      return $this->hasOne('App\User','id','user_id');
    }
}
