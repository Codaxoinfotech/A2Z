<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CommonController extends Controller
{
    public function getSelect(Request $request){
     
      $records = DB::table($request->table)->where($request->key,$request->value)->where('status','Enable')->get();
         $key= $request->key;
         $key2= $request->key2;
      $html = '';

      if($records){
        foreach($records as $row){
           $html.='<option value="'.$row->id.'">'.$row->$key2.'</option>';
        }
        return $html;
      }else{
        return "Not Found Records";
      }
    
    }
}
