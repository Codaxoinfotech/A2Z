@extends('user.layouts.app')
@section('body')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->

            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Apply form</h4>
                    </div>
                    <div class="card-body">
                    <form class="form" method="post" action="" >
                        @csrf
                        <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                            <label class="form-label" for="first-name-column">Category</label>
                            <select class="select2 form-select" id="category" name="category" onchange="Subcategory()">
                                @foreach($category as $row) 
                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-1">
                            <label class="form-label" for="last-name-column">Sub Category</label>
                            <select class="select2 form-select" id="sub_category" name="sub_category">
                               
                            </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="mb-1">
                            <label class="form-label" for="reason">Reason</label>
                            <textarea class="form-control" id="reason" name="reason" rows="3" placeholder="Reason"></textarea>
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


  <script>
   function Subcategory(){
        var cat = $('#category').val();
        $.ajax({
            url: "{{ url('get-select') }}?value="+cat+"&table=sub_categories&key=category_id&key2=name", 
            success: function(result){
           $('#sub_category').html(result);
        }});

   }

   Subcategory();   
   
  </script>  
@endsection