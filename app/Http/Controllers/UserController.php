<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
class UserController extends Controller
{
  public function user_list()
  {
    $users =User::all();
      return view('admin.user.user_list',compact('users'));

  }

    public function user_update($user)
   {
         $roles = Role::all();
         $user = User::findOrFail($user);
          return view('Admin.User.user_update')->with([
            'user' => $user,
            'roles'=> $roles
          ]);
   }
   public function update(Request $request,User $user)
   {
     $user->roles()->sync($request->roles);
       return redirect()->route('user_list')
                 ->with('success','User updated successfully.');
   }
   public function delete(User $user)
   {
       $user->roles()->delete();
       return redirect()->route('user_list')
                 ->with('success','User Deleted successfully.');
   }

}
