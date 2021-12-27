<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function AddEditModal(id=null){
        $("#AddEditModal").modal('show');
        $(".modal-title").html("Add Services");
        $("#actionBtn").html("Save");
        $('#modalForm')[0].reset();
        $("#service_id").val(0);
        if(id!=null){
            getServiceRecord(id);
            $(".modal-title").html("Edit Services");
            $("#actionBtn").html("Update");
            $("#service_id").val(id);
        }
    }
</script>


<script type="text/javascript">
    
    $('#modalForm').on('submit', function(event){
        event.preventDefault();
            $.ajax({
            url: "{{ route('services.store') }}",
            type: "POST",
            data: $(this).serialize(),
            success:function(response){
                console.log(response);
                swal(response.message, "", response.popup_type);
                $('#modalForm')[0].reset();   
                $("#service_id").val(0);             
                if(response.action == "update"){
                    $("#AddEditModal").modal('hide');
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



    function getServiceRecord(id){
        $.ajax({
            type:"GET",
            url:"services/6/edit",
            data:{id:id},
            success:function(res){
                console.log(res);
                selectCategories(res.category_id);
                selectSubCategories(res.category_id, res.sub_category_id);
                $("#serviceName").val(res.serviceName);   
                $("#description").val(res.description);  
                $("#cost").val(res.cost);                
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

    function selectSubCategories(categoryId, subCategoryId=null){
        $.ajax({
            type:"GET",
            url:"{{ url('getSelect2Record') }}?table=sub_categories&key=category_id&value="+categoryId+"&column1=id&column2=subCategoryName",
            success:function(data){
                // console.log(data);
                $("#sub_category_id").html(data);
                if(subCategoryId!=null){
                    $("#sub_category_id").val(subCategoryId);
                    $("#sub_category_id").triger('change');
                }
                
            }
        });
    }

    selectCategories();
    // selectSubCategories();
</script>

@include('../delete_using_ajax/delete')