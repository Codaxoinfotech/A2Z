<?php

namespace App\Http\Controllers;

use App\AssignService;
use App\Employee;
use App\Category;
use App\assign_sub_list;
use Illuminate\Http\Request;

class AssignServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category_id'=>'required',
            'sub_category_id'=>'required',
            'emp_id'=>'required'    
        ]);
        unset($input['_token']);
        $assign = AssignService::create($input);

        $sub_count = sizeof($request->sub_category_id);

        for($i=0; $i<$sub_count; $i++){
            $sub_assign= new assign_sub_list();
            $sub_assign->sub_category_id = $request->sub_category_id[$i];
            $sub_assign->assign_id = $assign->id;
            $sub_assign->save();
        }

        return back()->with('message','Assign Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $records = AssignService::leftJoin('assign_sub_lists','assign_services.id','assign_sub_lists.assign_id')->where('emp_id',$id)->get();
       $emp = Employee::find($id);
       $categories = Category::where('status','Enable')->get();
       return view('admin.assign.assign',compact('emp','categories','records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AssignService  $assignService
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignService $assignService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AssignService  $assignService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignService $assignService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AssignService  $assignService
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignService $assignService)
    {
        //
    }
}
