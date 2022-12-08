@extends('admin.layouts.app')
@section('body')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Form Layouts</h2>
                <a href="{{ route('emp.index') }}" >Employee List</a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="content-body"><div class="row">

</div>
<!-- Basic table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>Emp No</th>
              
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Mobile 2</th>
              <th>Address</th>
              <th>Status</th>
              <th>Assign</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{ $row->emp_SN }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->mobile }}</td>
                <td>{{ $row->mobile2 }}</td>
                <td>{{ $row->address }}</td>
                <td>
                    <strong>{{ $row->status }} </strong>
                </td>
                <td><a href="{{ route('assign.show',$row->id) }}" >Assign Service</a></td>
                
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</section>
<!--/ Basic table -->





        </div>
      </div>
    </div>
    <!-- END: Content-->



@endsection