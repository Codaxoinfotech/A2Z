<?php

namespace App\Http\Controllers;
use Auth;
use App\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $items = Items::where('apply_id',$request->apply_id)->get();
       $html = "";
       $i=0;
       $total = 0;
        foreach($items as $row){
            $total += $row->total;
            $html.="<tr>
                    <td>".++$i."</td>
                    <td>".$row->item."</td>
                    <td>".$row->price."</td>
                    <td>".$row->qty."</td>
                    <td>".$row->gst."</td>
                    <td>".$row->total."</td>";
                if($row->status=='Approved'){
                    $html.="<td><button type='button' class='btn btn-danger' onclick='deleteItem(".$row->id.")'>D</button></td>";
                    }
            $html.="</tr>";
                
        }

        $html.="<tr><th colspan='5' class='text-right'>Total</th><th>".$total."</th></tr>";
        return $html;
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
        $user  = Auth::user();
        $input = $request->all();
        $request->validate([
            'item'=>'required',
            'price'=>'required',
            'qty'=>'required',
            'apply_id'=>'required',
            'gst'=>'required',
            'total'=>'required',
        ]);
        $input['status'] = "Enable";
        if($request->id){
            $input['updatedby']= $user->id;
            Items::where('id',$request->id)->update($input);
            return "Item Updated";
        }else{

             $input['createdby']= $user->id; 
            Items::create($input);
            return "Item Added";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        return Items::find($id)->delete();
    }
}
