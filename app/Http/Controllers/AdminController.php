<?php

namespace App\Http\Controllers;
use Auth;
use App\Items;
use App\Admin;
use App\ApplyServices;
use App\assign_sub_list;
use App\Employee;
use App\Paytm;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function adminLogin(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

         if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){ 
            $admin = Auth::guard('admin')->user(); 
           return redirect(route('admin.index'));
         } 
         else {
            return back()->with("error","OTP Don't Match"); 
        }
    }


    public function index(){
        
         $data = ApplyServices::leftJoin('paytms','apply_services.id','paytms.apply_id')
                                        ->where('apply_services.status','!=','Finish')                             
                                        ->where('paytms.status',0)
                                        ->where('paytms.fee_type','service')
                                        ->select('apply_services.*')
                                        ->get();
        return view('admin.index',compact('data'));
    }
   
    public function ServiceView($id){
    $data =  ApplyServices::with('paytms')->where('id',$id)->first();

       $assigns = assign_sub_list::with('assign_service')->where('sub_category_id',$data->sub_category_id)->get();
        foreach($assigns as $row){
            $emp = Employee::where('id',$row->assign_service->emp_id)->select('id','name')->where('status','Enable')->first();
            $row->emps = $emp;
        }

      return view('admin.show_service',compact('data','assigns'));
    }

    public function AssignEmpService(Request $request){

        $request->validate([
            'emp_id'=>'required',
            'apply_id'=>'required'
        ]);

        $data =  ApplyServices::find($request->apply_id); 
        $data->emp_id = $request->emp_id;
        $data->status = 'Assign';
        $data->assign_date = date('Y-m-d');
        $data->assign_time = date("h:i");
        $data->save();
         
        if($data){
            return "1";

        }else{
            return 0;
        }

    }
}
