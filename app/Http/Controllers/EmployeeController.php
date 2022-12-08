<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use App\Employee;
use App\ApplyServices;
use Illuminate\Http\Request;

class EmployeeController extends Controller 
{

    public function login(){
        return view('emp.login');
    }

    public function empLogin(Request $request){
         $request->all();
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

         if(Auth::guard('emp')->attempt(['email' => $request->email, 'password' => $request->password])){ 
           $emp = Auth::guard('emp')->user(); 
           return redirect(route('emp.home'));
         } 
         else {
            return back()->with("error","OTP Don't Match"); 
        }
    }

    public function home(){
        $user = auth()->user() ?? null;
        $data = ApplyServices::where('emp_id',$user->id)->where('status','!=','Complete')->Where('status','!=','Apply')->get();
        return view('emp.index',compact('data'));
    }

    public function history(){
        $user = auth()->user() ?? null;
        $data = ApplyServices::where('emp_id',$user->id)->where('status','Complete')->orWhere('status','Finish')->get();
        return view('emp.history',compact('data'));
    }
   
    public function serviceShow($id){
        $data = ApplyServices::find($id);
        return view('emp.service',compact('data'));
    }

    public function onProcess($id){

        $data = ApplyServices::find($id);
        $data->proccess_date = date('Y-m-d');
        $data->proccess_time = date("h:i");
        $data->save();
        return redirect(route('emp.service.show',$id));

    }
    
    public function serviceComplete(Request $request){

        $data = ApplyServices::find($request->id);
        $data->work_finish_date = date('Y-m-d');
        $data->work_finish_time = date("h:i");
        $data->status = "Complete";
        $data->emp_notes = $request->emp_notes;
        $data->save();
        return redirect(route('emp.history'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employee::all();
        return view('admin.emp.empList',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.emp.emp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'mobile' => 'required|max:10'
        ]);
        $num = Employee::latest()->first('id');
 
        $last_id = sprintf("%04d", $num->id);
        $input['emp_SN'] = "A2Z/EMP/".date('y')."/".$last_id;
        
        $input['password'] = Hash::make($request->password);
        Employee::create($input);
        return back()->with('success','Added Employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
