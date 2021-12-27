<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $data = service::with('categories', 'sub_categories')->paginate(10);
  
        if ($request->ajax()) {
            return view('services.services_datatable', compact('data'));
        }  
        return view('services.services',compact('data'));
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
        $myArray = array(
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'serviceName' => $request->serviceName,
            'description' => $request->description,
            'cost' => $request->cost,
            'createdBy' => Auth::user()->id,
            'status' => 1
        );

        if($request->service_id == 0){
            $res = service::create($myArray);
            if($res->id){
                $response = [];
                $response['error'] = false;
                $response['success'] = true;
                $response['popup_type'] = "success";
                $response['action'] = "create";
                $response['message'] = "New Record Added Successfully";
                return $response;
            }else{
                $response = [];
                $response['error'] = true;
                $response['success'] = false;
                $response['popup_type'] = "error";
                $response['action'] = "";
                $response['message'] = "Something went wrong";
                return $response;            
            }
        }else{
            if(service::where('id', $request->service_id)->update($myArray)){
                $response = [];
                $response['error'] = false;
                $response['success'] = true;
                $response['popup_type'] = "success";
                $response['action'] = "update";
                $response['message'] = "Record Updated Successfully";
                return $response;
            }else{
                $response = [];
                $response['error'] = true;
                $response['success'] = false;
                $response['popup_type'] = "error";
                $response['action'] = "";
                $response['message'] = "Something went wrong";
                return $response;            
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $res = service::find($request->id);
        return $res;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
