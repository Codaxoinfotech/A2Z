<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use Datatables;

class usersController extends Controller
{

    public function getUsers(Request $request)
    {
        $data = DB::table('users')->get();
        return $users = datatables()->of($data)

        
        ->editColumn('role', function($users) {
            if($users->role == 0){ 
                return '<span class="label label-info">User</span>'; 
            }else{ 
                return '<span class="label label-success">Admin</span>'; 
            }
        })  
        
        ->editColumn('status', function($users) {
            if($users->status == 0){ 
                return '<span class="label label-success">Unblocked</span>'; 
            }else{ 
                return '<span class="label label-important">Blocked</span>'; 
            }
        }) 
       

        ->addColumn('action', function($students) {

            $blocked = url('/user/blobked/'.$students->id);
            $unblobked = url('/user/unblobked/'.$students->id);
            
            $action = '';
            if($students->role == 0){
                if($students->status == 0){
                $action='<a class="btn btn-danger btn-sm" href="{{ url('.$blocked.') }}"><i class="fa fa-lock"></i> Block</a>

                <a class="btn btn-success btn-sm" href="{{ url('.$unblobked.') }}"><i class="fa fa-unlock-alt"></i> Unblock</a>';
                }
            }
            return ' 
                '.$action.'

            ';
        })
        ->rawColumns(['role','status','action'])
        ->addIndexColumn()

        ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blocked($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->update(['status'=>1]);
        Session::flash('success', 'Blocked');
        return Redirect('/users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unblobked($id)
    {
        DB::table('users')
        ->where('id', $id)
        ->update(['status'=>0]);
        Session::flash('success', 'Un-Blocked');
        return Redirect('/users');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $users = DB::table('users')->get();
        return view('users');
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
