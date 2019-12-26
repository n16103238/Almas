<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;
use App\SalesDetails;
use App\Medicines;
class SalesController extends Controller
{
  public function sales()
      {
        //dd($roles);
        return view('pharmacist.pos.add_sales');
      }


  public function add_sales(Request $request)
  {
            $id = Sales::insertGetId([
               'customer_name' =>$request-> customer_name,
               'phone' =>$request-> phone,
               'age' =>$request-> age,
               'sub_total' => 0,
             ]);
             return redirect()->route('sales_details')->with('id', $id);
}


//Sales Details

public function sales_details(Request $request)
    {
      $medicines = Medicines::all();
      $sale_id = $request ->sale_id;
     $sales = Sales::where('id', $sale_id)->select()->get();
    //  dd($sale_id);
      return view('pharmacist.pos.sales_details',compact('medicines','sales'));
    }



public function add_sales_details(Request $request)
{
  $medicine = Medicines::where('id', $request-> medicine_id)->first();
  $mprice = $medicine -> selling_price;
  $total = $mprice * $request -> quantity;

  $sale = Sales::where('id', $request-> sale_id)->first();
  $pstotal = $sale -> sub_total;
  $nstotal = $pstotal + $total;

  $medicine = Medicines::where('id', $request-> medicine_id)->first();
  $pquantity = $medicine -> quantity;
  $nquantity = $pquantity - $request -> quantity;

        if($nquantity>=0){
          SalesDetails::insert([
             'sale_id' =>$request-> sale_id,
             'medicine_id' =>$request-> medicine_id,
             'quantity' =>$request-> quantity,
             'total' => $total,
           ]);
          Sales::where('id', $request -> sale_id)->update([
            'sub_total' => $nstotal,
          ]);
          Medicines::where('id', $request -> medicine_id)->update([
            'quantity' => $nquantity,
          ]);
return back()->with('id',$request-> sale_id);
        }
        else{
          return back()->with('id',$request-> sale_id)->with('warning','Medicine not available');
        }


}
public function confirm($id)
    {
      $sale_id = $id;
     $sales = SalesDetails::where('sale_id', $sale_id)->get();
     $order = Sales::where('id', $sale_id)->first();
     //dd($order->id);
      return view('pharmacist.pos.confirm_list',compact('sales','order'));
    }


}
