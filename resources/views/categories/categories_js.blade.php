<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function categoryModal(id=null){
        $("#categoryModal").modal('show');
        $(".modal-title").html("Add Category");
        $("#cateBtn").html("Save");
        $('#categoriesForm')[0].reset();
        $("#category_id").val(0);
        if(id!=null){
            getCategoryRecord(id);
            $(".modal-title").html("Edit Category");
            $("#cateBtn").html("Update");
            $("#category_id").val(id);
        }
    }
</script>


<script type="text/javascript">
    
    $('#categoriesForm').on('submit', function(event){
        event.preventDefault();
        var name = $("#name").val();
        var img = $("#img").val();
        var status = false;
        if(name==''){
            $("#name").addClass('border-danger');
            status = false;
        }else{
            $("#name").removeClass('border-danger');
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
            url: "{{ route('category.store') }}",
            type: "POST",
            enctype: 'multipart/form-data', 

            // data: $(this).serialize(),
            data:  formData,
            contentType: false,
           processData: false,
           cache:false,
            success:function(response){
                console.log(response);
                swal(response.message, "", response.popup_type);
                $('#categoriesForm')[0].reset();   
                $("#category_id").val(0);             
                if(response.action == "update"){
                    $("#categoryModal").modal('hide');
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



    function getCategoryRecord(id){
        $.ajax({
            type:"GET",
            url:"category/6/edit",
            data:{id:id},
            success:function(res){
                console.log(res.name);
                $("#name").val(res.name);                
            }
        });
    }
</script>

@include('../delete_using_ajax/delete')