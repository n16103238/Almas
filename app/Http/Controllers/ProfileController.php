<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profiles;
use Auth;
class ProfileController extends Controller
{
    public function index(){
      $id = Auth::user()->id;
      $profile = Profiles::where('user_id', $id )->get();
      //dd($profile);
        return view('profile.index', compact('profile'));
    }

    public function add_information(Request $request)
    {
      Profiles::insert([
         'user_id' => Auth::user()->id,
         'Phone_number' =>$request-> Phone_number,
         'present_address' =>$request-> present_address,
         'parmanent_address' =>$request-> parmanent_address,
         'education' =>$request-> education,
         'gender' =>$request-> gender,
         'blood_group' =>$request-> blood_group,
      ]);
      return back()->with('success','Information Added Sucessfully');

    }

  public function update_information(Request $request)
  {
      $id = Auth::user()->id;
          Profiles::where('user_id', $id )->update([
             'Phone_number' =>$request-> Phone_number,
             'present_address' =>$request-> present_address,
             'parmanent_address' =>$request-> parmanent_address,
             'education' =>$request-> education,
             'gender' =>$request-> gender,
             'blood_group' =>$request-> blood_group,
          ]);
    return back()->with('success','Information Updated Sucessfully');
  }

}
