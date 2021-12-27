<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommonController extends Controller
{
    public function delete(Request $request)
    {
        if(DB::table($request->table)->where($request->key, $request->value)->delete()){
                $response = [];
                $response['error'] = false;
                $response['success'] = true;
                $response['popup_type'] = "success";
                $response['action'] = "delete";
                $response['message'] = "Record Deleted Successfully";
                return $response;
        }else{
                $response = [];
                $response['error'] = true;
                $response['success'] = false;
                $response['popup_type'] = "error";
                $response['action'] = "";
                $response['message'] = "Something Went Wrong";
                return $response;   
        }
    }


    public function getSelect2Record(Request $request)
    {
        $table = $request->table;
        $key = $request->key;
        $value = $request->value;
        $column1 = $request->column1;
        $column2 = $request->column2;

        $result = DB::table($table)->where($key, $value)->get();
        $html = '<option value="">Select</option>';
        foreach($result as $row){
            $html .= '
            <option value="'.$row->$column1.'">'.$row->$column2.'</option>
            ';
        }
        return $html;

    }
    
    
    public function select_record(Request $request){
        $table = $request->table;
        $key = $request->key;
        $value = $request->value;
        $result = DB::table($table)->where($key, $value)->first();
        return json_encode($result);
    }

}
