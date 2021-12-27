<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subCategory;
use App\Models\request_services;
use App\Models\packages;
use App\Models\User;
use Session;
use Redirect;


class UserDashboard extends Controller
{
    
    public function userLogout(){
            Session::flush('uid');
            return Session::get('uid');
            // Session::put('uname', $user->name);
            // Session::put('uemail', $user->email);
    }
    
    public function userDashboard(){
        return view('userDashboard.index');
    }

    public function history(){
        $uid = Session::get('uid');
        $request_services = request_services::where('user_id', $uid)->get();
        return view('userDashboard.history', compact('request_services'));
    }

    public function profile(Request $request){
        $userid = Session::get('uid');
        $packages = packages::get();
        $user = User::find($userid);
        return view('userDashboard.profile', compact('packages', 'user'));
    }

    public function addService(Request $request){
        $category_id = $request->category_id;
        $subCategory = subCategory::where('category_id', $category_id)->get();
        return view('userDashboard.add_service', compact('subCategory'));
    }

    public function userServiceSubmit(Request $request){
      $request->all();
      $myArray = array(
          'user_id' => Session::get('uid'),
          'category_id' => $request->category_id,
          'sub_category_id' => $request->subcategory_id,
          'description' => $request->description,
          'manual_address' => $request->address,
          'status' => 0
          );
        request_services::create($myArray);
        Session::flash('success', 'Requested successfully!');
        return Redirect::back();
    }
}
