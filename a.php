<?php
$notification_type=$_POST["notification_type"];
 $result=""  ;
			  $con= mysqli_connect("localhost","root","");
                        mysqli_select_db($con,"majordomo_db");
      
  $sql = "select function_name from notification_function_tbl where notification_id =( select notification_id from notification_tbl where notification_type = '$notification_type');";
  $res=mysqli_query($con, $sql) or die("Error: ".mysqli_error($con));
   while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
       $result=$result.'<option value="$row[0]">'.$row["function_name"].'</option>';
                         }
                        echo $result;
    
   



















?>