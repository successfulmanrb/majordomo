<?php
$notification_type=$_POST["notification_type"];
$application_name=$_POST["application_name"];
$component_name=$_POST["component_name"];
$specific_component_name=$_POST["specific_component_name"];

$country_region=$_POST["country"];
$country_name=$_POST["country_name"];
$start_date_time=$_POST["start_date_time"];
$end_date_time=$_POST["end_date_time"];


$update_column=$_POST["update"];
$server=$_POST["server"];
$business=$_POST["business"];
$additional_info=$_POST["additional_info"];


$info_contact=$_POST["info_contact"];
$contact=$_POST["contact"];
$request=$_POST["request"];
$bridge_details=$_POST["bridge_details"];


			  $con= mysqli_connect("localhost","root","");
                        mysqli_select_db($con,"majordomo_db");
      
  $sql = "insert into store_notofication_tbl(notification_type,application_name,component_name,specific_component_name,country_region,country_name,start_date_time,
end_date_time,update_column,server,business,additional_info,info_contact,contact,request,bridge_details) values(\"$notification_type\",\"$application_name\",\"$component_name\",\"$specific_component_name\",\"$country_region\",\"$country_name\",\"$start_date_time\",\"$end_date_time\"
,\"$update_column\",\"$server\",\"$business\",\"$additional_info\",\"$info_contact\",\"$contact\",\"$request\",\"$bridge_details\")";
  $res=mysqli_query($con, $sql) or die("Error: ".mysqli_error($con));

if($res)
{
   echo "true";}
   else
   {
   echo "false";}
    
  



?>