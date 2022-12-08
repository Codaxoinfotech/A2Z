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
                <a href="{{ route('package.index') }}" >Package List</a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="content-body"><!-- Basic Horizontal form layout section start -->

<!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Package</h4>
        </div>
        <div class="card-body">
          @if(isset($package))
          <form class="form" action=" {{ route('package.update',$package->id ) }} " method="POST">
          @method('PUT')
          @else
          <form class="form" action=" {{ route('package.store') }} " method="POST">
          @endif  @csrf
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="mb-1">
                {{ $package }}
                  <label class="form-label" for="first-name-column">Name</label>
                  <input
                    type="text"
                    id="name"
                    class="form-control"
                    placeholder="Full Name"
                    name="name"
                    value="{{ old('name',isset($package->name) ? $package->name : '' ) }}"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Amount</label>
                  <input
                    type="number"
                    id="amount"
                    class="form-control"
                    placeholder="Amount"
                    name="amount"
                    value="{{ old('amount',isset($package->amount) ? $package->amount : '' ) }}"

                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Duration Day</label>
                  <input 
                  type="number" 
                  id="duration" 
                  class="form-control" 
                  placeholder="duration" 
                  name="duration" 
                  value="{{ old('duration',isset($package->duration) ? $package->duration : '' ) }}"
                  
                  />
                </div>
              </div>
              
            
              <div class="col-md-6 col-12">
                <div class="mb-1">
              
                            <label class="form-label" for="last-name-column">Status</label>
                            <select class="select2 form-select" id="status" name="status">
                               <option value="Enable" >Enable</option>
                               <option value="Disable">Disable</option>
                            </select>
                            <script>document.getElementById("status").value = "{{ old('status',isset($package->status) ? $package->status : '' ) }}"; </script>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary me-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Floating Label Form section end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

@endsection