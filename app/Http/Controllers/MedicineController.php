<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicines;
use App\Category;

class MedicineController extends Controller
{
          public function add_medicine()
          {
            $categories = Category::all();
              return view('admin.medicine.add_medicine',compact('categories'));
          }
        //Add Medicine
        public function create_medicine(Request $request)
        {
                Medicines::create([
                   'name' =>$request-> name,
                   'category_id' =>$request-> category_id,
                   'purchase_price' =>$request-> purchase_price,
                   'selling_price' =>$request-> selling_price,
                   'quantity' =>$request-> quantity,
                   'generic_name' =>$request-> generic_name,
                   'company' =>$request-> company,
                   'effects' =>$request-> effects,
                   'expiry_date' =>$request-> expiry_date,
                ]);
          return back()->with('success','Medicine Added Sucessfully');
        }

          public function medicine_list()
          {

            $medicines = Medicines::all();
              return view('admin.medicine.medicine_list',compact('medicines'));
          }

        //Medicine update
        public function update_medicine($id){
          $categories = Category::all();
                    $med = Medicines::findOrFail($id);
        //  dd($cat);
          return view('admin.medicine.medicine_update',compact('med', 'categories'));
        }

        function update(Request $request,$id) {
          Medicines::findOrFail($id)->update([
            'name' =>$request-> name,
            'category_id' =>$request-> category_id,
            'purchase_price' =>$request-> purchase_price,
            'selling_price' =>$request-> selling_price,
            'quantity' =>$request-> quantity,
            'generic_name' =>$request-> generic_name,
            'company' =>$request-> company,
            'effects' =>$request-> effects,
            'expiry_date' =>$request-> expiry_date,
           ]);
           return redirect()->route('medicine_list')->with('success','Medicine Updated Sucessfully');
        }

        //delete
        public function delete(Request $request)
        {
            Medicines::findOrFail($request->id)->delete();
            return back()->with('success','Medicine Deleted Successfully.');
        }


 }
