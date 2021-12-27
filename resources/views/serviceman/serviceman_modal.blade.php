
  <!-- The Modal -->
  <div class="modal fade" id="ServiceManModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <button type="button" class="close modal-dismiss-btn" data-dismiss="modal">&times;</button>
        <div class="modal-header">
          <h4 class="modal-title">Serviceman</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
            <form action="#" id="serviceManForm" class="form-horizontal"  enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" name="serviceman_id" id="serviceman_id">

                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Name</label>
                  <div class="col-sm-9 col-lg-10 controls">
                 <input type="text" name="name" id="name" class="form-control show-popover" data-trigger="hover" data-content="Enter Serviceman Name Here." data-original-title="Serviceman Name" data-placement="top" autofocus />
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Mobile</label>
                  <div class="col-sm-9 col-lg-10 controls">
                 <input type="text" name="mobile" id="mobile" class="form-control show-popover" data-trigger="hover" data-content="Enter Mobile Number Here." data-original-title="Mobile Number" data-placement="top" autofocus />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Email</label>
                  <div class="col-sm-9 col-lg-10 controls">
                 <input type="email" name="email" id="email" class="form-control show-popover" data-trigger="hover" data-content="Enter Email Here." data-original-title="Email" data-placement="top" autofocus />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Address</label>
                  <div class="col-sm-9 col-lg-10 controls">
                    <textarea name="address" id="address" class="form-control show-popover" data-trigger="hover" data-content="Enter Address Here." data-original-title="Address" data-placement="top" autofocus></textarea>
                  </div>
                </div>

               
                
                <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                   <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <span id="cateBtn">Save</span></button>

                </div>
                </div>
            </form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>