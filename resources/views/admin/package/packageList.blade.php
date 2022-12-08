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
                <a href="{{ route('package.create') }}" >Package Add</a>
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
              <th>Name</th>
              <th>Amount</th>
              <th>Duration</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->amount }}</td>
                <td>{{ $row->duration }}</td>
                <td>
                    <strong>{{ $row->status }} </strong>
                </td>
                <td>
                    <a href="{{ route('package.edit',$row->id) }}" >E</a>
                </td>
                
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