<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;
use Redirect;
use Session;
use DB;


class WebsiteController extends Controller
{
    public function index(){
        return view('website.index');
    }

    public function aboutus(){
        return view('website.about');
    }


    public function contactus(){
        return view('website.contact');
    }



    public function userLogin(){
        return view('website.login');
    }

    public function userLoginSubmit(Request $request){
        $request->validate([
            'mobile'=>'required|digits:10'
            ]);
        
        $mobile = $request->mobile;
        
        $digits = 4;
        $otp = rand(pow(10, $digits-1), pow(10, $digits)-1);
        Session::put('sOtp', $otp);
        $myArray = array(
            'otp' => $otp
        );
        
        $count = User::where('mobile', $mobile)->count();
        if($count != 0){
            
            if(User::where('mobile', $mobile)->update($myArray)){
            $success['mobile'] =  $mobile;
            $user = User::where('mobile', $mobile)->first();
            Session::put('uid', $user->id);
            Session::put('uname', $user->name);
            Session::put('uemail', $user->email);
            return Redirect('user-otp-form');
            }
        
        }else{
            
            $myArray2 = array(
                'mobile' => $mobile
            );
            User::create($myArray2);
            
            if(User::where('mobile', $mobile)->update($myArray)){
            $success['mobile'] =  $mobile;
            $user = User::where('mobile', $mobile)->first();
            Session::put('uid', $user->id);
            Session::put('uname', $user->name);
            Session::put('uemail', $user->email);
            return Redirect('user-otp-form');
            }
            
        }
        
        return Redirect::back();
    }
    
    public function userOtpForm(Request $request){
        $sotp = Session::get('sOtp');
        return view('website.otp', compact('sotp'));
    }

    public function userOtpSubmit(Request $request){
        $otp = $request->otp;
        $sotp = Session::get('sOtp');
        if($otp == $sotp){
            return Redirect('user-home');    
        }else{
            Session::flash('error_otp', 'Invalid otp');
            return Redirect::back();
        }
        
    }
    
    public function userHome(){
        $category = category::where('status', 1)->get();
        return view('userDashboard.index', ['category'=>$category]);
    }
    
    
    public static function getValue($table, $key, $value, $column){
        $res = DB::table($table)->where($key, $value)->value($column);
        return $res;
    }

    

   
}
