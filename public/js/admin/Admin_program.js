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

    $('#country').on('change', function() {
        console.log($('#country').val());
        var selected = $('#country').val();
        
        $('#locate > option').each(function() {
            $this = $(this)
            //var value = $this.find("td.td_country").html();
            console.log(this.text + ' ' + this.value);
            if (this.value.indexOf(selected) >= 0) {
                $('select[name*="locate_list[]"] > option[value="' + this.value +'"]').show();
            }
            else {
            $('select[name*="locate_list[]"] > option[value="' + this.value +'"]').hide();
            }
        });
    });
});