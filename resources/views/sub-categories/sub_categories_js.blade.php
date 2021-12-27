<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function subCategoryModal(id=null){
        $("#subCategoryModal").modal('show');
        $(".modal-title").html("Add Sub Category");
        $("#actionBtn").html("Save");
        $('#modalForm')[0].reset();
        $("#sub_category_id").val(0);
        if(id!=null){
            getSubCategoryRecord(id);
            $(".modal-title").html("Edit Sub Category");
            $("#actionBtn").html("Update");
            $("#sub_category_id").val(id);
        }
    }
</script>


<script type="text/javascript">
    
    $('#modalForm').on('submit', function(event){
        event.preventDefault();
        var category_id = $("#category_id").val();
        var subCategoryName = $("#subCategoryName").val();
        var img = $("#img").val();
        var status = false;
        if(category_id==''){
            $("#category_id").addClass('border-danger');
            status = false;
        }else{
            $("#category_id").removeClass('border-danger');
            status = true;
        }

        if(subCategoryName==''){
            $("#subCategoryName").addClass('border-danger');
            status = false;
        }else{
            $("#subCategoryName").removeClass('border-danger');
            status = true;
        }
        if(img==''){
            $("#img").addClass('border-danger');
            status = false;
        }else{
            $("#img").removeClass('border-danger');
            status = true;
        }

        let formData = new FormData(this);

        if(status){
            $.ajax({
            url: "{{ route('subCategory.store') }}",
            type: "POST",
            enctype: 'multipart/form-data', 
            data:  formData,
            contentType: false,
            processData: false,
            cache:false,
            success:function(response){
                console.log(response);
                swal(response.message, "", response.popup_type);
                $('#modalForm')[0].reset();   
                $("#sub_category_id").val(0);             
                if(response.action == "update"){
                    $("#modalForm").modal('hide');
                }
                var page = window.location.hash.replace('#', '');
                    if (page == Number.NaN || page <= 0) {
                        getData();
                    }else{
                        getData(page);
                    }
                    

            },
            error: function(response) {
            }
            });
        }
        

        });
      </script>


<script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    
    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
  
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
  
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
  
            getData(page);
        });
  
    });
  
    function getData(page){        
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }



    function getSubCategoryRecord(id){
        $.ajax({
            type:"GET",
            url:"subCategory/6/edit",
            data:{id:id},
            success:function(res){
                console.log(res);
                selectCategories(res.category_id);
                $("#subCategoryName").val(res.subCategoryName);                
            }
        });
    }

    function selectCategories(id=null){
        $.ajax({
            type:"GET",
            url:"{{ url('getSelect2Record') }}?table=categories&key=status&value=1&column1=id&column2=name",
            success:function(data){
                // console.log(data);
                $("#category_id").html(data);
                if(id!=null){
                    $("#category_id").val(id);
                    $("#category_id").triger('change');
                }
                
            }
        });
    }
    selectCategories();
</script>

@include('../delete_using_ajax/delete')