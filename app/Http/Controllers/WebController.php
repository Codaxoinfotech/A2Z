<?php

namespace App\Http\Controllers;
use App\User;
use Hash;
use Session;
use Auth;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function userLogin(){
        
        if(Auth::user()){
            return redirect(route('user.index'));
        }
        return view('web.login');
    }

    public function userLoginPost(Request $request){
        $data = $request->all();
        $otp = random_int(100000, 999999);
        $mobile = $request->mobile;
        Session::put('mobile', $mobile);
        $user=User::where('mobile',$mobile)->first();
        if($user){
            $user->password = Hash::make($otp);
            $user->save();
        }else{
            $new_user =new User();
            $new_user->mobile = $mobile;
            $new_user->password = Hash::make($otp);
            $new_user->save();
        }
        return view('web.otp',compact('otp'));
    }

    public function otpVerify(Request $request){

        $inputOtp = $request->o1.$request->o2.$request->o3.$request->o4.$request->o5.$request->o6;
         if(Auth::guard('web')->attempt(['mobile' => Session::get('mobile'), 'password' => $inputOtp])){ 
            $user = Auth::user(); 
           return redirect(route('user.index'));
         } 
         else {
            return back()->with("error","OTP Don't Match"); 
        }

            

    }
}
