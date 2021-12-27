<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class CommonController extends BaseController
{
    public function sendOtp(Request $request)
    {
        $rules = array('mobile'=>'required|digits:10');
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        return $this->sendError($validator->messages());
        }
        
        $mobile = $request->mobile;
        $digits = 4;
        $otp = rand(pow(10, $digits-1), pow(10, $digits)-1);

        $myArray = array(
            'otp' => $otp
        );
        if(User::where('mobile', $mobile)->update($myArray)){
            $success['mobile'] =  $mobile;
            return $this->sendResponse($success, 'Otp Send Successfully.');
        }else{
            $success['mobile'] =  $mobile;
            return $this->sendResponse($success, 'Otp Send Successfully.');
        }

    }

    public function otpVerify(Request $request)
    {
        $mobile = $request->mobile;
        $otp = $request->otp;
        
        $vefiry = User::where(['mobile'=>$mobile, 'otp'=>$otp])->count();

        if($vefiry>0){
            $res = User::where(['mobile'=>$mobile, 'otp'=>$otp])->first();
            User::where(['mobile'=>$mobile, 'otp'=>$otp])->update(['veryfycode'=>$otp]);
            $success['id'] =  $res->id;
            $success['name'] =  $res->name;
            $success['email'] =  $res->email;
            $success['mobile'] =  $res->mobile;
            $success['otp'] =  $res->otp;
            $success['veryfycode'] =  $res->veryfycode;     
            $success['profile_photo_path'] =  $res->profile_photo_path;            
            return $this->sendResponse($success, 'Otp Verified Successfully.');
        }else{
            $success['mobile'] =  $mobile;
            $success['otp'] =  $otp;
            return $this->sendResponse($success, 'Something went wrong.');
        }

    }

}
