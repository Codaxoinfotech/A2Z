<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\api\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;

class UsersController extends BaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'mobile' => 'required|digits:10|unique:users',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->sendError('User Already Exists',  ['error'=>'Your id was blocked, Contact to Admin']);       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User successfully registered! Please contact the administrator to activate your account.');
    }



    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            if($user->status == 1){                
                $success['token'] =  $user->createToken('MyApp')->accessToken; 
                $success['id'] =  $user->id;
                $success['name'] =  $user->name;
                $success['mobile'] =  $user->mobile;
                $success['email'] =  $user->email;
               

                return $this->sendResponse($success, 'User login successfully.');
            }else{
                return $this->sendError('Your Account Is Not Approved Please Contact To Admin...', ['error'=>'Your id was blocked, Contact to Admin']);
            }
            
        } 
        else if(Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])){ 
            $user = Auth::user(); 
            if($user->status == 1){
                $success['token'] =  $user->createToken('MyApp')->accessToken; 
                $success['id'] =  $user->id;
                $success['name'] =  $user->name;
                $success['mobile'] =  $user->mobile;
                $success['email'] =  $user->email;
    

                return $this->sendResponse($success, 'User login successfully.');
            }else{
                return $this->sendError('Your Account Is Not Approved Please Contact To Admin...', ['error'=>'Your id was blocked, Contact to Admin']);
            }
            
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    }
}
