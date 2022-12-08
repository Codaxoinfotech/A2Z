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
        <div class="content-body"><!-- Basic Horizontal form layout section start -->

<!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Employee</h4>
        </div>
        <div class="card-body">
          <form class="form" action=" {{ route('emp.store') }} " method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">Name</label>
                  <input
                    type="text"
                    id="name"
                    class="form-control"
                    placeholder="Full Name"
                    name="name"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="last-name-column">Email</label>
                  <input
                    type="text"
                    id="email"
                    class="form-control"
                    placeholder="Email"
                    name="email"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="city-column">Mobile</label>
                  <input type="number" id="mobile" class="form-control" placeholder="mobile" name="mobile" />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="country-floating">Mobile 2</label>
                  <input
                    type="text"
                    id="mobile2"
                    class="form-control"
                    name="mobile2"
                    placeholder="Mobile 2"
                  />
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="mb-1">
                  <label class="form-label" for="company-column">Image</label>
                  <input
                    type="file"
                    id="photo"
                    class="form-control"
                    name="photo"
                  />
                </div>
              </div>

              <div class="col-md-2 col-12">
                <div class="mb-1 img">
                  
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="mb-1">
                  <label class="form-label" for="email-id-column">Password</label>
                  <input
                    type="text"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="Password"
                  />
                </div>
              </div>
              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="company-column">Address</label>
                  <input
                    type="text"
                    id="address"
                    class="form-control"
                    name="address"
                    placeholder="Address"
                  />
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