<?php

namespace App\Http\Controllers;

use App\Models\subCategory;
use Illuminate\Http\Request;
use Auth;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = subCategory::with('categories')->paginate(10);
  
        if ($request->ajax()) {
            return view('sub-categories.sub_category_datatable', compact('data'));
        }  
        return view('sub-categories.sub_category',compact('data'));
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
            'subCategoryName' => $request->subCategoryName,
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

        if($request->sub_category_id == 0){
            $res = subCategory::create($myArray);
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
            
            if(subCategory::where('id', $request->sub_category_id)->update($myArray)){
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
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(subCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $id = $request->id;
        $subCategory = subCategory::find($id);
        return $subCategory;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subCategory $subCategory)
    {
        //
    }
}
