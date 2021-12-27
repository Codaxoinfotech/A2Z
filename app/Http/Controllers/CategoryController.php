<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Auth;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = category::paginate(10);
  
        if ($request->ajax()) {
            return view('categories.category_datatable', compact('data'));
        }
  
        return view('categories.category',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";
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
            'createdBy' => Auth::user()->id,
            'status' => 1
        );

        if ($request->hasFile('img')) {
            $rand_val = date('YMDHIS') . rand(11111, 99999);
            $image_file_name = md5($rand_val);
            $file = $request->file('img');
            $fileName = $image_file_name . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/uploadFiles';
            $file->move($destinationPath, $fileName);
            $myArray['img'] = $fileName;
        }

        

        if($request->category_id == 0){
            $res = category::create($myArray);
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
            
            if(category::where('id', $request->category_id)->update($myArray)){
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
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, category $category)
    {
        $category_id = $request->id;
        $category = category::find($category_id);
        return $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        return "destroy";
    }
}
