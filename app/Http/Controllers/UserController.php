<?php

namespace App\Http\Controllers;
use Auth;
use App\Category;
use App\ApplyServices;
use App\user_package_add;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $records = ApplyServices::all();
        return view('user.index',compact('records'));
    }

    public function logout(){
        Auth::logout();
        return view('user.index');
    }

    public function apply(){
        $category = Category::where('status','Enable')->get();
        return view('user.applyForm',compact('category'));
    }

    public function applyPost(Request $request){
        
        $input =$request->all();
        $request->validate([
            'category' => 'required',
            'sub_category' => 'required',
            'reason' => 'required',
        ]);
        $num = ApplyServices::latest()->first('id');
        if(isset($num)){
            $inc_num = ++$num->id;
        }else{
            $inc_num = 1;
        }
       
        $last_id = sprintf("%04d", $inc_num);

        unset($input['_token']);
        $input['apply_no'] = "A2Z/".date('y')."/".$last_id;
        $input['apply_date'] = date('Y-m-d');
        $input['apply_time'] =  date("h:i");
        $input['category_id'] =  $request->category;
        $input['sub_category_id'] =  $request->sub_category;
        $input['status'] =  "Apply";
        $input['user_id'] =  Auth::user()->id;

       $apply = ApplyServices::create($input);
      return redirect(route('user.payment',$apply));
    }

    public function serviceShow($id){
        $data = ApplyServices::find($id);
        return view('user.service',compact('data'));
    }

    public function payment($id){
         $apply = ApplyServices::find($id);
        return view('user.payment',compact('apply'));
    }

    public function pay(){
        $user = Auth::user() ?? null ;
        $pack = user_package_add::where('status','Run')->where('user_id',$user->id)->first();
        $pack = $pack ?? 1;
        return view('user.paytm.paytm',compact('pack','user'));

    }
}
