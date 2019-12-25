<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
      'customer_name',
      'phone',
      'age',
      'sub_total',
    ];
}
