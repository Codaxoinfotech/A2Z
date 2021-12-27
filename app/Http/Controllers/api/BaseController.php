<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $version = '1.0.0';
    public $return_id = 0;

    public function sendResponse($result, $message)
    {

        $response = array("success" => true,"version" => $this->version, "return_id" => $this->return_id, "msg" => $message,"data" => array($result));


        return response()->json($response, 200);
    }

    public function sendResponse2($result, $message)
    {

        $response = array("success" => true,"version" => $this->version, "return_id" => $this->return_id, "msg" => $message,"data" => $result);


        return response()->json($response, 200);
    }

    public function sendError($error, $result = [], $code = 404)
    {
     
          $response = array("success" => false,"version" => $this->version, "return_id" => $this->return_id, "msg" => $error,"data" => array($result));


        return response()->json($response, 200);
    	
    }
}
