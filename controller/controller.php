<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lessoncontroller
 *
 * @author Rahul BANSAL
 */
class controller {
    //put your code here
    
    function CreateOptionValues() {
          $result="";
       $con= mysqli_connect("localhost","root","");
                        mysqli_select_db($con,"majordomo_db");
                       $tbl_name="notification";
            
            
            $sql="SELECT notification_type FROM notification_tbl ";
            
            $rs=mysqli_query($con,$sql) or die("Error: ".mysqli_error($con));
            
                        while($r=mysqli_fetch_array($rs, MYSQLI_ASSOC))
                        {  $result=$result.'<option value="$r[0]">'.$r["notification_type"].'</option>';
                         }
                        return $result;   
                     }
 function GetFunctionValues($val) {
          $result=""  ;
			  $con= mysqli_connect("localhost","root","");
                        mysqli_select_db($con,"majordomo_db");
      
  $sql = "select function_name from notification_function_tbl where notification_id =( select notification_id from notification_tbl where notification_type = '$val');";
  $res=mysqli_query($con, $sql) or die("Error: ".mysqli_error($con));
   while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
       $result=$result.'<option value="$row[0]">'.$row["function_name"].'</option>';
                         }
                        return $result;
    
  

}


function GetApplicationValues() {
          $result=""  ;
			  $con= mysqli_connect("localhost","root","");
                        mysqli_select_db($con,"majordomo_db");
      
  $sql = "select application_name from application_tbl;";
  $res=mysqli_query($con, $sql) or die("Error: ".mysqli_error($con));
   while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
	   
                        $result=$result.'<input type="checkbox" name="application_name"  value="'.$row["application_name"].'" >
                                       '.$row["application_name"].' <br>';
                         }
                        return $result;
    
  

}

 }


   
?>





