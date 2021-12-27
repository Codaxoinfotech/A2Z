@extends('layouts.app')

@section('content')

<div id="main-content">
    <!-- BEGIN Page Title -->
    <div class="page-title">
    <div>
    <h1><i class="fa fa-file-o"></i> Sub-Categories</h1>
    </div>
    </div>
    <!-- END Page Title -->
    
    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
    <ul class="breadcrumb">
    <li>
    <i class="fa fa-home"></i>
    <a href="index.html">Home</a>
    <span class="divider"><i class="fa fa-angle-right"></i></span>
    </li>
    <li class="active">Sub category</li>
    </ul>
    </div>
    <!-- END Breadcrumb -->
    
    <!-- BEGIN Main Content -->
    <div class="row">
    <div class="col-md-12">
    <div class="box">
    <div class="box-title">
    <h3><i class="fa fa-bars"></i> Sub Categories</h3>
    <div class="box-tool">
        <button type="button" onclick="subCategoryModal()" class="btn btn-primary"><i class="fa fa-check-circle" aria-hidden="true"></i> Add New</button>
    </div>
    </div>
    <div class="box-content">
        <div class="responsive-table" id="tag_container">
            @include('sub-categories.sub_category_datatable')
        </div>      


    </div>
    </div>
    </div>
    </div>

    
    <footer>
    <p>2013 © FLATY Admin Template.</p>
    </footer>
    
    <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>


    @include('sub-categories.sub_categories_modal')
    @include('sub-categories.sub_categories_js')

@endsection