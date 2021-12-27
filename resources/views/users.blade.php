@extends('layouts.app')

@section('content')


<div id="main-content">
<!-- BEGIN Page Title -->
<div class="page-title">
<div>
<h1><i class="fa fa-users"></i> Users</h1>
{{-- <h4>Overview, stats, chat and more</h4> --}}
</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
<ul class="breadcrumb">
<li class="active"> <a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i>Home</a></li>
</ul>
</div>
<!-- END Breadcrumb -->



<!-- BEGIN Main Content -->

<div class="row">
    <div class="col-md-12">

        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <center>
        <i class="icon fa fa-check"></i> Successfully {{ Session::get('success') }}
        </center>
        </div>
        @endif

        @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <center><i class="icon fa fa-warning"></i> {{ Session::get('error') }}</center>
        </div>
        @endif

    <div class="box">
    <div class="box-title">
    <h3><i class="fa fa-table"></i> Users</h3>
    <div class="box-tool">
    <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
    <a data-action="close" href="#"><i class="fa fa-times"></i></a>
    </div>
    </div>
    <div class="box-content">
    <div class="table-responsive">
    <table id="users-table" class="table table-striped table-hover fill-head">
    <thead>
    <tr>
    <th>#</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Role</th>
    <th>Status</th>
    <th style="width: 150px">Action</th>
    </tr>
    </thead>
    
    </table>
    </div>
    </div>
    </div>
    </div>
    
    </div>

<!-- END Main Content -->

<footer>
<p>2013 © FLATY Admin Template.</p>
</footer>

<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

@endsection

<script src="//code.jquery.com/jquery.js"></script>
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('users.data') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'role', name: 'role' },
                { data: 'status', name: 'status' },
                { data: 'action', name: 'action' },
            ]
        });
    });
    </script>
