<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\packages;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = packages::where('status', 1)->paginate(10);
  
        if ($request->ajax()) {
            return view('packages.packages_datatable', compact('data'));
        }
  
        return view('packages.packages',compact('data'));
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
            'name' => $request->name,
            'amount' => $request->amount
            );
        $res = packages::where('id', $request->package_id)->update($myArray);
            if($request->package_id){
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
