<?php
$application_name=$_POST["application_name"];
 $result=""  ;
			  $con= mysqli_connect("localhost","root","");
                        mysqli_select_db($con,"majordomo_db");
      
  $sql = "select component_name from application_component_tbl where application_id =( select application_id from application_tbl where application_name =\"$application_name\");";
  $res=mysqli_query($con, $sql) or die("Error: ".mysqli_error($con));
   while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
       $result=$result.'<input type="checkbox" name="component_name"  value="'.$row["component_name"].'" >
                                       '.$row["component_name"].' <br>';
                         }
                        echo $result;
    
    
  



?>