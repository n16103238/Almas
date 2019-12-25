<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Medicines;
use App\Stock;
class StockController extends Controller
{
  public function stock()
      {
        $medicines = Medicines::all();
              return view('pharmacist.stock.stock',compact('medicines'));
      }
      public function add_stock()
      {
        $medicines = Medicines::all();
          return view('pharmacist.stock.add_stock',compact('medicines'));
              }

              function create(Request $request) {

                $pq = Medicines::where('id',$request->id)->first();
                $nq = $pq->quantity + $request->quantity;
                Medicines::where('id',$request->id)->update([
                  'quantity' => $nq
                ]);
                //dd($nq);
                return back()->with('success','Stock Added Sucessfully');

              }
}
