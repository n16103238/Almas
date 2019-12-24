<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Staffs;
class StaffController extends Controller
{
  //Add Staff
    public function staff_list()
        {
          $staffs = Staffs::all();
            return view('admin.staff.staff_list',compact('staffs'));
        }


    public function add_staff()
    {
        return view('admin.staff.add_staff');
            }

            function create(Request $request) {
              Staffs::create([
                'name' =>$request-> name,
                'phone' =>$request-> phone,
                'position' =>$request-> position,
                'salary' =>$request-> salary,
                'gender' =>$request-> gender,
                'address' =>$request-> address,
               ]);
               return redirect()->route('staff_list')->with('success','Staff Added Sucessfully');
            }

        //Staff update
          public function update_staff($id){
            $sta = Staffs::findOrFail($id);
          //  dd($sta);
            return view('admin.staff.update_staff',compact('sta'));
          }

          function update(Request $request,$id) {
            Staffs::findOrFail($id)->update([
               'name' =>$request-> name,
               'phone' =>$request-> phone,
               'position' =>$request-> position,
               'salary' =>$request-> salary,
               'gender' =>$request-> gender,
               'address' =>$request-> address,
             ]);
             return redirect()->route('staff_list')->with('success','Staff Information Updated Sucessfully');
          }

          //Staff delete
          public function delete(Request $request)
          {
              Staffs::findOrFail($request->id)->delete();
              return back()->with('success','Staff Deleted successfully.');
          }
}
