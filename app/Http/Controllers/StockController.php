<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Medicines;

class StockController extends Controller
{
  public function stock()
      {
        $roles = Role::all();
        //dd($roles);
        return view('pharmacist.stock.stock',compact('medicines'));
      }
}
