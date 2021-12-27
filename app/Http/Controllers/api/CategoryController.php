<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\api\BaseController as BaseController;

class CategoryController extends BaseController
{
    public function index()
    {
        $category = category::get();
        $success['data'] =  $category;
        return $this->sendResponse($success, 'Data found successfully!');
    }

    public function edit($id)
    {
        return $id;
    }
}
