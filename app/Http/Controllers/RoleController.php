<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
class RoleController extends Controller
{



  public function role_list()
      {
        $roles = Role::all();
        //dd($roles);
        return view('admin.user.role_list',compact('roles'));
      }



  public function add_role()
  {
      return view('admin.user.add_role');
          }

          function create_role(Request $request) {
            Role::create([
               'name' =>$request-> name,
             ]);
             return back()->with('success','Role added sucessfully');
          }
          //Role update
          public function update_role($id){
                      $role = Role::findOrFail($id);

            return view('admin.user.role_update',compact('role'));
          }

          function update(Request $request,$id) {
            Role::findOrFail($id)->update([
              'name' =>$request-> name,

                         ]);
             return redirect()->route('role_list')->with('success','Role Updated Sucessfully');
          }

          //delete
          public function delete(Request $request)
          {
              Role::findOrFail($request->id)->delete();
              return back()->with('success','Role Deleted Successfully.');
          }

}
