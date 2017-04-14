$(document).ready(function(){
	
	var url = "/programs";

	//admin program script
	//delete program and remove it from list
    $('.delete-program').click(function(){
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        var program_id = $(this).val();
        console.log(url+'/'+program_id);
        $.ajax({

            type: "DELETE",
            url: url + '/' + program_id,
            success: function (data) {
                console.log(data);

                $("#program" + program_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});