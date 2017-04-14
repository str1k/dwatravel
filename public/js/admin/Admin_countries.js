$(document).ready(function(){
	
	var url = "/countries";

    //display modal form for country editing
    $('.open-modal-countries').click(function(){
        var task_id = $(this).val();

        $.get(url + '/' + task_id, function (data) {
            //success data
            console.log(data);
            $('#task_id').val(data.id);
            $('#country-form').val(data.country);
            
            $("#region").find('option')
                        .remove()
                        .end()
                        .append($('<option>', {value:"ทัวร์เอเชีย", text:"ทัวร์เอเชีย"}));
            $('#region').append($('<option>', {value:"ทัวร์ยุโรป , อเมริกา , แอฟริกาใต้", text:"ทัวร์ยุโรป , อเมริกา , แอฟริกาใต้"}));
            $("#region").val(data.region);
            $('#country-img').attr('src', data.pic_url);
            $('#btn-save').val("update");

            $('#myModal').modal('show');
        }) 
    });

	//admin program script
	//delete program and remove it from list
    $('.delete-country').click(function(){
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        var country_id = $(this).val();
        console.log(url+'/'+country_id);
        $.ajax({

            type: "DELETE",
            url: url + '/' + country_id,
            success: function (data) {
                console.log(data);

                $("#country" + country_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
});