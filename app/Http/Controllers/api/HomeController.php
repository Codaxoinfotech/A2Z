<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\api\BaseController as BaseController;
use App\Models\banner;
use App\Models\category;
use App\Models\User;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        $mobile = $request->mobile;

        $user = User::where('mobile', $mobile)->first();
        $category = category::get();
        $banner = banner::where('status', 1)->get();

        $success['data1'] =  $category;
        $success['data2'] =  $user;
        $success['data3'] = $banner;
        return $this->sendResponse($success, 'Data found successfully!');
    }
}
