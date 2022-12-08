@extends('admin.layouts.app')
@section('body')
        <!-- BEGIN: Content-->
        <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
       
        <div class="content-body"><!-- Basic Horizontal form layout section start -->

<!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Assign Service to {{ $emp->name }}</h4>
          
        </div>
       
        <div class="card-body">
        <x-alert />
          <form class="form" action=" {{ route('assign.store') }} " method="POST">
            @csrf
            <div class="row">
              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">Category</label>
                  <select
                    type="text"
                    id="category"
                    class="form-control"
                   
                    name="category_id"
                  />
                    <option value="">Select Category</option>
                    @foreach($categories as $cate)
                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                    @endforeach
                </select>

                <input type="hidden" name="emp_id" id="emp_id" value="{{ $emp->id }}" />
                </div>
              </div>
              <div class="col-md-12 col-12">
                <div class="mb-1">
                  <label class="form-label" for="first-name-column">Sub Category</label>
                  <div class="demo-inline-spacing fetch_sub_category">
                  
              
                    </div>
           
            
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


<!-- Basic table -->
<section id="basic-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>Category</th>
              
              <th>Sub Category</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($records as $row)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{ $row->category->name }}</td>
            
                <td>
                    <strong>{{ $row->sub_category->name }} </strong>
                </td>
                <td>
                    <!-- <a class="btn btn-success" href="{{ route('assign.edit',$row->id) }}" > Edit</a>
                    <a class="btn btn-danger"  href="{{ route('assign.destroy',$row->id) }}" >Del</a> -->
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
<!-- Basic Floating Label Form section end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <script type="text/javascript">

    $('#category').val(<?php echo isset($editData->category_id) ? $editData->category_id : '' ; ?>);
   function getSubCategory(){
      var category = <?php if(isset($editData->category_id)) { echo $editData->category_id; } else {  ?> $('#category').val() <?php } ?>;
      var id = <?php if(isset($editData->id)) { echo $editData->id; } else { echo 0; } ?>;
      $.ajax({
        url : '{{ route("fetech_sub_category") }}?category='+category+'&id='+id,
        type: 'get',
        success:function(res){
            console.log(res);
            $('.fetch_sub_category').html(res);
        }
      });
    }

    getSubCategory(); //this calls it on load
    $("#category").change(getSubCategory);
    
</script>
@endsection