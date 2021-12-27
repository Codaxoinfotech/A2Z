
  <!-- The Modal -->
  <div class="modal fade" id="AddEditModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <button type="button" class="close modal-dismiss-btn" data-dismiss="modal">&times;</button>
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
            <form action="#" id="modalForm" class="form-horizontal">
                @csrf
                
                <input type="hidden" name="service_id" id="service_id">

                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Category Name</label>
                  <div class="col-sm-9 col-lg-10 controls">
                    <select onchange="selectSubCategories(this.value)" name="category_id" style="width: 100%;" id="category_id" class="form-control show-popover js-select2-basic" data-trigger="hover" data-content="Select Category Name Here." data-original-title="Category Name" data-placement="top" required>
                      <option value="">Select Category</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Sub Category Name</label>
                  <div class="col-sm-9 col-lg-10 controls">
                    <select name="sub_category_id" style="width: 100%;" id="sub_category_id" class="form-control show-popover js-select2-basic" data-trigger="hover" data-content="Select Category Name Here." data-original-title="Category Name" data-placement="top" required>
                      <option value="">Select Category</option>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Service Name</label>
                  <div class="col-sm-9 col-lg-10 controls">
                 <input type="text" name="serviceName" id="serviceName" class="form-control show-popover" data-trigger="hover" data-content="Enter Service Name Here." data-original-title="Service Name" data-placement="top" autofocus  required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Description</label>
                  <div class="col-sm-9 col-lg-10 controls">
                  <textarea name="description" id="description" class="form-control show-popover" data-trigger="hover" data-content="Enter Service Name Here." data-original-title="Service Name" data-placement="top"></textarea>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">Service Cost</label>
                <div class="col-sm-9 col-lg-10 controls">
                 <input type="text" name="cost" id="cost" class="form-control show-popover" data-trigger="hover" data-content="Enter Service Cost Here." data-original-title="Service Cost" data-placement="top" autofocus  required/>
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <span id="actionBtn">Save</span></button>
                  <button type="button" class="btn">Cancel</button>
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