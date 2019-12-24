<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Medicines;

class CategoryController extends Controller
{
  //Add Category
    public function medicine_category()
        {
          $categories = Category::all();
            return view('admin.medicine.medicine_category',compact('categories'));
        }


    public function add_category()
    {
        return view('admin.medicine.add_category');
            }

            function create(Request $request) {
              Category::create([
                 'name' =>$request-> name,
                 'description' =>$request-> description,
               ]);
               return back()->with('success','Medicine Category Added Sucessfully');
            }

            //Category update
          public function update_category($id){
            $cat = Category::findOrFail($id);
          //  dd($cat);
            return view('admin.medicine.category_update',compact('cat'));
          }

          function update(Request $request,$id) {
            Category::findOrFail($id)->update([
               'name' =>$request-> name,
               'description' =>$request-> description,
             ]);
             return redirect()->route('medicine_category')->with('success','Medicine Category Updated Sucessfully');
          }

          //delete
          public function delete(Request $request)
          {
              Category::findOrFail($request -> id)->delete();
              return back()->with('success','Category Deleted successfully.');
          }

}
