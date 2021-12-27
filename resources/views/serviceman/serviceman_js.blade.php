<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function serviceManModal(id=null){
        $("#ServiceManModal").modal('show');
        $(".modal-title").html("Add Service Man");
        $("#cateBtn").html("Save");
        $('#categoriesForm')[0].reset();
        $("#serviceman_id").val(0);
        if(id!=null){
            getCategoryRecord(id);
            $(".modal-title").html("Edit Service Man");
            $("#cateBtn").html("Update");
            $("#serviceman_id").val(id);
        }
    }
</script>


<script type="text/javascript">
    
    $('#serviceManForm').on('submit', function(event){
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var mobile = $("#mobile").val();
        var address = $("#address").val();
        var status = false;
        if(name==''){
            $("#name").addClass('border-danger');
            status = false;
        }else{
            $("#name").removeClass('border-danger');
            status = true;
        }
        
        if(email==''){
            $("#email").addClass('border-danger');
            status = false;
        }else{
            $("#email").removeClass('border-danger');
            status = true;
        }
        
        if(mobile==''){
            $("#mobile").addClass('border-danger');
            status = false;
        }else{
            $("#mobile").removeClass('border-danger');
            status = true;
        }
        
        if(address==''){
            $("#address").addClass('border-danger');
            status = false;
        }else{
            $("#address").removeClass('border-danger');
            status = true;
        }

        

        let formData = new FormData(this);
      

        if(status){
            $.ajax({
            url: "{{ route('serviceman.store') }}",
            type: "POST",
            // data: $(this).serialize(),
            data:  formData,
            contentType: false,
           processData: false,
           cache:false,
            success:function(response){
                console.log(response);
                // swal(response.message, "", response.popup_type);
                // $('#categoriesForm')[0].reset();   
                // $("#category_id").val(0);             
                // if(response.action == "update"){
                //     $("#categoryModal").modal('hide');
                // }
                // var page = window.location.hash.replace('#', '');
                //     if (page == Number.NaN || page <= 0) {
                //         getData();
                //     }else{
                //         getData(page);
                //     }
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

</script>

@include('../delete_using_ajax/delete')