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


}
