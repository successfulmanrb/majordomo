$(document).ready(function() {
  $("#notification_type").change(function() {
    var notification_type = $(this).val();
    if(notification_type != "") {
      $.ajax({
        url:"get-states.php",
        data:{c_id:country_id},
        type:'POST',
        success:function(response) {
          var resp = $.trim(response);
          $("#state").html(resp);
        }
      });
    } else {
      $("#state").html("<option value=''>------- Select --------</option>");
    }
  });
});


 <select>
					  <option value="null">Please select</option>
					  <option value="systemOutage">Value#</option>
					  <option value="maintenance">Value#</option>
					  <option value="disasterRecovery">value#</option>
					</select>