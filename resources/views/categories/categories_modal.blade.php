
  <!-- The Modal -->
  <div class="modal fade" id="categoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <button type="button" class="close modal-dismiss-btn" data-dismiss="modal">&times;</button>
        <div class="modal-header">
          <h4 class="modal-title">Category</h4>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
            <form action="#" id="categoriesForm" class="form-horizontal"  enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" name="category_id" id="category_id">

                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Category Name</label>
                  <div class="col-sm-9 col-lg-10 controls">
                 <input type="text" name="name" id="name" class="form-control show-popover" data-trigger="hover" data-content="Enter Category Name Here." data-original-title="Category Name" data-placement="top" autofocus />
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-lg-2 control-label">Image</label>
                  <div class="col-sm-9 col-lg-10 controls">
                 <input type="file" name="img" id="img" class="form-control show-popover" data-trigger="hover"  data-placement="top" autofocus />
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