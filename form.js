
$(function()
{

	$("#notification_type").change(function(){
	
		$.post("a.php",{notification_type:$("#notification_type").find(":selected").text()},function(res){
		
		$("#drop2").empty().append(res);
		})
	
	
	
	});


		$("#application_name").change(function(){
	


		$.post("component_name_fetch.php",{application_name:$("input[name='application_name']:checked").val()},function(res){
		
		$("#component_name").empty().append(res);
		})
	
	
	
	});



$("#submit").click(function(){
	
		$.post("store_notification.php",{
		notification_type:$("#notification_type").find(":selected").text(),
	application_name:$("input[name='application_name']:checked").val(),
			component_name:$("input[name='component_name']:checked").val(),
			specific_component_name:$("specific_component").val(),
			country:$("input[name='country']:checked").val(),
			country_name:$("country_name").val(),
			start_date_time:$("input_append_date_form_datetime_start").val(),
				end_date_time:$("input_append_date_form_datetime_end").val(),
               update_column:$("update").val(),
                  server:$("server").val(),
			 business:$("business").val(),
			 additional_info:$("additional_info").val(),
			 info_contact:$("info_contact").val(),
			 contact:$("contact").val(),
			 request:$("request").val(),
			 bridge_details:$("bridge_details").val()
			}
			,function(res){
		if(res=="true")
		alert("Submitted successfully");
		else
alert("Nono");

		})
	
	
	
	});






    function after_form_submitted(data)
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });
            
        }//else
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' ); 
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });
        

                    $.ajax({
                type: "POST",
                url: 'handler.php',
                data: $form.serialize(),
                success: after_form_submitted,
                dataType: 'json' 
            });        
        
      });	
});


