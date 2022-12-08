@extends('emp.layouts.app')
@section('body')

<!-- BEGIN: Content-->
<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="invoice-add-wrapper">
    <form action="{{ route('emp.service.complete') }}" method="post" >
    @csrf
    <div class="row invoice-add">
    <!-- Invoice Add Left starts -->
    <div class="col-xl-12 col-md-12 col-12">
      <div class="card invoice-preview-card">
        <!-- Header starts -->
        <div class="card-body invoice-padding pb-0">
          <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
            <div>
              <div class="logo-wrapper">
                
                  
                 
                
              </div>
              <p class="card-text mb-25">To,</p>
              <p class="card-text mb-25">{{ $data->user->name }}</p>
              <p class="card-text mb-25">{{ $data->user->mobile }}</p>
              <p class="card-text mb-25">{{ $data->user->email }}</p>
              <p class="card-text mb-25">{{ $data->user->address }}</p>
              
            </div>
            <div class="invoice-number-date mt-md-0 mt-2">
              <div class="d-flex align-items-center justify-content-md-end mb-1">
                <h4 class="invoice-title">Apply No</h4>
                
                  <h4 class="invoice-title"> : {{ $data->apply_no }}</h4>
                
              </div>
              <div class="d-flex align-items-center justify-content-md-end mb-1">
                <span class="title">Date:</span>
                <span class="title"> {{ $data->apply_date }}</span>
              </div>

              <div class="d-flex align-items-center justify-content-md-end mb-1">
                <span class="title">Time:</span>
                <span class="title"> {{ $data->apply_time }}</span>
              </div>

              
            </div>
          </div>
        </div>
        <!-- Header ends -->

        <hr class="invoice-spacing" />

        <!-- Address and Contact starts -->
        <div class="card-body invoice-padding pt-0">
          <div class="row row-bill-to invoice-spacing">
            <div class="col-xl-6 mb-lg-1 col-bill-to ps-0">
            <h6 class="mb-2">Service Details:</h6>
              <table>
                <tbody>
                  <tr>
                    <td class="pe-1"> Category </td>
                    <td><strong> {{ $data->category->name }}</strong></td>
                  </tr>
                  <tr>
                    <td class="pe-1"> Sub Category</td>
                    <td>{{ $data->sub_category->name }}</td>
                  </tr>
                  <tr>
                    <td class="pe-1">Details(Reason):</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="pe-1"></td>
                    <td>{{ $data->reason }}</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <div class="col-xl-6 p-0 ps-xl-2 mt-xl-0 mt-2">
              <h6 class="mb-2">Process Details:</h6>
              <table>
                <tbody>
                  <tr>
                    <td class="pe-1">Apply Date & Time:</td>
                    <td><strong>{{ $data->apply_date }} {{ $data->apply_time }}</strong></td>
                  </tr>

                  <tr>
                    <td class="pe-1">Assign Date & Time:</td>
                    <td><strong>{{ $data->assign_date }} {{ $data->assign_time }}</strong></td>
                  </tr>

                  <tr>
                    <td class="pe-1">Work Start Date & Time:</td>
                    <td><strong>{{ $data->proccess_date }} {{ $data->proccess_time }}</strong></td>
                  </tr>

                  <tr>
                    <td class="pe-1">Work Complete Date & Time:</td>
                    <td><strong>{{ $data->work_finish_date }} {{ $data->work_finish_time }}</strong></td>
                  </tr>
      
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- Address and Contact ends -->

     
        <!-- Product Details starts -->
        <div class="card-body invoice-padding invoice-product-details">
          <form class="source-item">
            <div data-repeater-list="group-a">
              <div class="repeater-wrapper" data-repeater-item>
                <div class="row">
                  <div class="col-12 d-flex product-details-border position-relative pe-0">
                    <div class="row w-100 pe-lg-0 pe-1 py-2">
                      <div class="col-lg-4 col-12 mb-lg-0 mb-2 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Item</p>
                        <input type="text" class="form-control" name="item" id="item"  />
                        </div>
                      <div class="col-lg-2 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">Price</p>
                        <input type="number" class="form-control" name="price" id="price" onchange="getTotal()"  />
                       
                      </div>
                      <div class="col-lg-2 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">Qty</p>
                        <input type="number" class="form-control" name="qty" id="qty"  onchange="getTotal()" />
                      </div>

                      <div class="col-lg-2 col-12 my-lg-0 my-2">
                        <p class="card-text col-title mb-md-2 mb-0">GST</p>
                          <select class="form-select item-details" id="gst" name="gst" onchange="getTotal()" >
                            <option value="">Select</option>
                            <option value="5">5%</option>
                            <option value="12">12%</option>
                            <option value="18">18%</option>
                            <option value="28">28%</option>
                          </select>
                      </div>
                      <div class="col-lg-2 col-12 mt-lg-0 mt-2">
                        <p class="card-text col-title mb-md-50 mb-0">Total</p>
                     
                        <input type="hidden" class="form-control" name="id" id="id"   />
                        <input type="hidden" class="form-control" name="apply_id" id="apply_id" 
                        value="{{ $data->id }}"   />
                        <p class="card-text mb-0" id="total" ></p>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-1">
              <div class="col-12 px-0">
              <button onclick="AddItem()" class="btn btn-primary btn-sm" >Save Item</button>
                
              </div>
            </div>
          </form>
        </div>
        <!-- Product Details ends -->
        <div class="col-xl-12 6 p-0 ps-xl-2 mt-xl-0 mt-2">
              <h6 class="mb-2">Item Details:</h6>
              <table class="table">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>Item</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>GST</th>
                      <th>Total</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody id="fetch_items">
                  
                  
                </tbody>
              </table>
            </div>
     
        <hr class="invoice-spacing mt-0" />

        <div class="card-body invoice-padding py-0">
          <!-- Invoice Note starts -->
          <div class="row">
            <div class="col-12">
              <div class="mb-2">
                <label for="note" name="emp_notes" class="form-label fw-bold">Note:</label>
                <input type="hidden" name="id" value="{{ $data->id }}" />;
                <textarea class="form-control" rows="2" id="note" placeholder="Remark"></textarea>
              </div>
              @if($data->status=='Proccess')
              <button class="btn btn-primary w-100 mb-75" >Finish Work</button>
              @endif
            </div>
            
          </div>
         
    </form>      
          <!-- Invoice Note ends -->
        </div>
      </div>
    </div>
    <!-- Invoice Add Left ends -->

    
  </div>

  
</section>

          </div>
      </div>
    </div>
    <!-- END: Content-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
                    function getTotal(){
                        var price = document.getElementById("price").value;
                        var qty = document.getElementById("qty").value;
                        var gst = document.getElementById("gst").value;
                        var total = 0;
                        if(price!='' && qty!='')
                        {
                            total = price*qty;
                        }
                        
                        if(gst!=''){
                          gst_total = total*gst/100;
                          total = total + gst_total;
                        }
                        
                        document.getElementById("total").innerHTML=Math.round(total);

                    }
</script> 
<script>          
   function AddItem(){
        var item =  document.getElementById("item").value;
        var price = document.getElementById("price").value; 
        var qty = document.getElementById("qty").value;
        var id = document.getElementById("id").value;
        var gst = document.getElementById("gst").value;
        var apply_id = document.getElementById("apply_id").value;
        var total = document.getElementById("total").innerHTML;

        $.ajax({
               type:'get',
               url: "{{ route('emp.additem') }}?item="+item+"&price="+price+"&qty="+qty+"&apply_id="+apply_id+"&gst="+gst+"&total="+total+"&id="+id, 
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#msg").html(data.msg);
                  fetchItem();
               }
               
            });

   }

   function fetchItem(){
    var apply_id = document.getElementById("apply_id").value;
    $.ajax({
               type:'get',
               url: "{{ route('emp.fetchitem') }}?apply_id="+apply_id, 
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#fetch_items").html(data);
                  console.log(data);
               }
               
            });
   }

// Delete Item 
  function deleteItem(id){
    $.ajax({
               type:'get',
               url: "{{ url('/') }}/emp/item-delete/"+id, 
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                fetchItem();
               }
               
            });
   }

   fetchItem();
  </script>  


@endsection

