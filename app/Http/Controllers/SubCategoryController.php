<?php

namespace App\Http\Controllers;
use App\AssignService;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }

    public function fetech_sub_category(Request $request){
        
         $records = SubCategory::where('category_id',$request->category)->get();
 
        $html='';
         foreach($records as $tc){
            $cks = $this->Checked($request->id,$tc->id);
             $html.='<div class="form-check form-check-inline ">
             <input class="form-check-input" type="checkbox" id="inlineCheckbox1" '.$cks.' value="'.$tc->id.'" name="sub_category_id[]"  />
              <label class="form-check-label" for="inlineCheckbox1">'.$tc->name.'</label>
              </div>
            ';
         }
        return $html;
 
     }

     static function Checked($id,$sub_id){
       
        $data =  AssignService::find($id);
  
        if(!empty($data)){
         $subs = json_decode($data->sub_category_id);
          $count = sizeof($subs);
          for($i=0; $i<$count; $i++){
              if($subs[$i]==$sub_id){
               return "checked";
              }
          }
      }
  
      }
}
