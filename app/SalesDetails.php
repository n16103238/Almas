<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesDetails extends Model
{
  protected $fillable = [
    'sale_id',
    'medicine_id',
    'quantity',
    'total',
  ];
  function medicines()
   {
     return $this->hasOne('App\Medicines','id','medicine_id');
   }
}
