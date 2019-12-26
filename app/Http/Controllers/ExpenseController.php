<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenses;
class ExpenseController extends Controller
{
  public function add_expense()
  {
    $expenses = Expenses::all();
      return view('pharmacist.expenses.add_expense',compact('expenses'));
  }
//Add Expenses
public function create_expense(Request $request)
{
        Expenses::create([
           'name' =>$request-> name,
           'amount' =>$request-> amount,

        ]);
  return back()->with('success','Expense Added Sucessfully');
}

  public function expense_list()
  {

    $expenses = Expenses::all();
      return view('pharmacist.expenses.expenses',compact('expenses'));
  }

//Expense update
public function update_expense($id){
  //$categories = Category::all();
            $exp = Expenses::findOrFail($id);
//  dd($cat);
  return view('pharmacist.expenses.update_expense',compact('exp'));
}

function update(Request $request,$id) {
  Expenses::findOrFail($id)->update([
    'name' =>$request-> name,
    'amount' =>$request-> amount,
   ]);
   return redirect()->route('expense_list')->with('success','Expense Updated Sucessfully');
}

//delete
public function delete(Request $request)
{
    Expenses::findOrFail($request->id)->delete();
    return back()->with('success','Expense Deleted Successfully.');
}

}
