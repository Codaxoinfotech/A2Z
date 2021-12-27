<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\api\BaseController as BaseController;
use App\Models\request_services;
use App\Models\service;

class ServiceController extends BaseController
{
    public function index(Request $request)
    {
        $category_id = $request->category_id;
        $sub_category_id = $request->sub_category_id;
        $services = service::where(['category_id'=>$category_id, 'sub_category_id'=>$sub_category_id])->get();
        return $this->sendResponse2($services, 'Data found Successfully.');
    }


    public function request_services(Request $request)
    {
        $rules = array(
            'user_id'=>'required',
            'category_id'=>'required',
            'sub_category_id'=>'required',
            'description'=>'required',
            'lat'=>'nullable',
            'long'=>'nullable',
            'manual_address'=>'nullable',
            'status'=>'required',
            'service_man_id'=>'required'
            );
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
        return $this->sendError($validator->messages());
        }
        $data = $request->all();
        $res = request_services::create($data);
        return $this->sendResponse($res, 'Service Requisted Successfully');
    }


}
