
<?php
require './Controller/controller.php';
$controller = new controller();
include "connection.php";
echo $content='


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Email Form Script - reusable form</title>

    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>

       
    </head>
    <body >
        <div class="container" style="width:100%">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 80px; width:100%">
                <div class="col-md-8 col-md-offset-2 form-container">
                   <!-- <h2>Outage Notification Tool </br> Service System </h2> -->
				   <div class="div">
						<font color="white" margin="35px"><h2>Outage Notification Tool </br> Service System</h2></font>
						
						
						
						</div>
						
                    <!--<p> Please provide details: </p>-->
                    <form role="form" method="post" id="reused_form">
                      <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Step:1- Notification Type: </label>
								<br>
					 

<select class="notification_type" id="notification_type" "> 
                                <option value="null">Please select</option>";'
                                .$controller->CreateOptionValues().
                                'echo "</select>
							
					
							</div>
								
					   
                            <div class="col-sm-6 form-group">
                                <label>Step:2- Function Status: </label>
								<br>
					 
					             <select class="drop2" id="drop2">
                      <option value="null">Please select</option></select>
</div>
					</div>	
						<!--<div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div> -->
						
						 <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Step:3- Select Application(s)</label>
                                <div class="application_name" id="application_name">
                                   
                                                                 
                                  
                                    
										
										'.$controller->GetApplicationValues().'
                                 
						
                                        
										
                                 
									
                                </div>
                            </div>
                        
                        
                            <div class="col-sm-6 form-group">
                                <label for="comments">Application Components Impacted :</label>
								<div class="col-sm-6 form-group">
								<div class="component_name" id="component_name">
								<!--<input type="checkbox" name="1TCCOE" id="radio_experience" value="bad" >-->
                            
                                  
                                 
								</div>
								</div>
                                <!--<textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>-->
                            </div>
							<div class="col-sm-6 form-group">
                                <label for="comments">Specify Additional Components :</label>
                                <textarea class="form-control" type="textarea" name="specific_componet"  placeholder="Your Comments" maxlength="6000" rows="2"></textarea>
                            </div>
                        </div>
						
						 <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Step:5- Region/Country Impacted</label>
                                <div class="country" id="country">
                                   
                                        <input type="checkbox" name="GLOBAL" id="radio_experience" value="" >
                                         GLOBAL <br>
                                  
                                    
                                        <input type="checkbox" name=" NAMER" id="radio_experience" value="" >
										NAMER<br>
                                  
                                 
                                        <input type="checkbox" name="MEA" id="radio_experience" value="" >
                                        MEA <br>
										 <input type="checkbox" name="EUROPE" id="radio_experience" value="" >
                                        EUROPE <br>
										 <input type="checkbox" name="APAC" id="radio_experience" value="" >
                                        APAC <br>
                                 
									
                                </div>
                            </div>
                        
                        
                            <div class="col-sm-6 form-group">
                                <label for="name">Country:</label>
								<div class="country_name">
                                <input type="text" class="form-control" id="country" name="name">
								</div>
                            </div>
                        </div>
						
						<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Estimate Start Date/Time</label>
                               <div class="form-group">
							   
								<!--<div class="input-group date" id="datetimepicker1">-->
									<input type="datetime-local" class="form-control" />
									<!--<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar" $("#datetimepicker").data("DateTimePicker").FUNCTION()></span>
									</span>-->
								<!--</div>
							<div class="input-append date form_datetime" name="input_append_date_form_datetime_start">

							<input size="16" type="text" value="" readonly  name="input_append_date_form_datetime_start">
				<span class="add-on"><i class="icon-th"></i></span>-->


							</div>
						</div>
						<div class="col-sm-6 form-group">
                                <label for="email"> Estimate End Date/Time:</label>
                                <div class="form-group" name="input_append_date_form_datetime_end">
									<!--<div class="input-group date" id="datetimepicker1">-->
									
										<input type="datetime-local" class="form-control"  name="input_append_date_form_datetime_end"/>
										
										<!--<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar" $("#datetimepicker").data("DateTimePicker").FUNCTION()></span>
										</span>-->
									<!--</div>-->
								</div>
                            </div>
						
					</div>
						
						<div class="row">
							<div class="col-sm-6 form-group" name="update">
                                <label for="name">Next Update:</label>
                                <input type="text" class="form-control"  name="update">
                            </div>
							<div class="col-sm-6 form-group ">
                                <label for="name">Server(s) Imapcted:</label>
                                <input type="text" class="form-control" name="server" required>
                            </div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group" name="business">
                                <label for="name">Business Imapct:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="3" name="business"></textarea>
                            </div>
							<div class="col-sm-6 form-group">
                                <label for="name">Additional Information:</label>
                                <textarea class="form-control" type="textarea" name="additional_info"  placeholder="Your Comments" maxlength="6000" rows="3"></textarea>
                            </div>
						</div>
						
						<div class="row">
							<div class="col-sm-6 form-group">
                                <label for="name">Information Contact:</label>
                                <input type="text" class="form-control"  name="info_contact">
                            </div>
							<div class="col-sm-6 form-group">
                                <label for="name">Phone Number:</label>
                                <input type="text" class="form-control"  name="contact">
                            </div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
                                <label for="name">Incident/Change Request:</label>
                                <input type="text" class="form-control" name="request" required>
                            </div>
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
                                <label for="name">Business Bridge Details:</label>
                                <textarea class="form-control" type="textarea" name="bridge_details"  placeholder="Your Comments" maxlength="6000" rows="3"></textarea>
                            </div>
						</div>
						
						</form>
						<div class="row">
                            <div class="col-sm-4 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block button" id="submit"  >Send </button>
                            </div>
                        </div>
					</div>
                        
						
						
						
                       <!-- <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>-->
                        
                    
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
    </body>
</html>












';
?>