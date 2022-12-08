@extends('admin.layouts.app')
@section('body')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        
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
              <th>Apply No</th>
              
              <th>Request</th>
              <th>User Details</th>
              
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{ $row->apply_no }}</td>
                <td>Category : {{ $row->category->name }} </br>
                    Sub Category: {{ $row->sub_category->name }} </br>
                    Reason(Problem) : {{ $row->reason }}
                </td>
                
                <td>{{ isset($row->user->name) ? "Name  ".$row->user->name : '' }} </br>
                    {{ isset($row->user->mobile) ? "Mobile : ".$row->user->mobile : '' }} </br>
                    {{ isset($row->user->email) ? "Email : ".$row->user->email : '' }}
                </td>
                <td>
                    <strong style="color:green;">{{ $row->status }} </strong><br>
                    @if($row->status=='Apply')
                        Date : {{ $row->apply_date }} </br>
                        Time : {{ $row->apply_time }}
                    @elseif($row->status=='Assign')
                        Date : {{ $row->assign_date }} </br>
                        Time : {{ $row->assign_time }}
                    @endif
                </td>
                <td><a class="btn btn-success"  href="{{ route('admin.service.view',$row->id) }}" >View</a> </td>
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