<script>
    function delete_record(table, key, value){

        swal({
        title: "Are you sure?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
                $.ajax({
                type:"GET",
                url:"{{ route('deleteRecord') }}",
                data:{table:table, key:key, value:value},
                success:function(response){
                    console.log(response);
                    swal(response.message, "", response.popup_type);
                    var page = window.location.hash.replace('#', '');
                        if (page == Number.NaN || page <= 0) {
                            getData();
                        }else{
                            getData(page);
                        }
                    }
                });
        } 
        });

        
    }
</script>