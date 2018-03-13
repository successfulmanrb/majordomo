<?php
ini_set('SMTP', 'relay1.daytonoh.ncr.com'); 
  ini_set('smtp_port', 25); 


    $name = 'NCR MAIL';
    $toAddr = $qlid.'@ncr.com';  
  $fromAddr = 'cabtestacc@gmail.com';
  $headers = "From: $name <$fromAddr>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
    $subject = 'test email';
    $message = '<table align="center" width="50%" border="0" cellspacing="5" cellpadding="5" bgcolor="#eeeeee">
    <tbody>
      <thead>
        
        <tr>
          <div style="display:inline-block;">
           <td colspan="2"><img style="float:left; margin-right:5px;" src="https://logo.png" >
           <h1 style="float:middle; margin-top:25px;">Welcome to NCR IDC PORTAL</h1></td>
         </div>
        </tr>
      
        <tr>
            <td colspan="2" align="center"><h3><i>You Have An </i></h3></td>
        </tr>
        </thead>
        <tbody>
<tr>
        <td style="width:50%;">Date: </td>
        <td style="width:50%;">'.$ctime.'</td>
      </tr>
           
           <tr>
        <td><label>QuickLook ID:</label></td>
        <td>'.$qlid.'</td>
      </tr>
      <tr>
        <td><label>Pickup Location:</label> </td>
        <td>'.$pu_l.'</td>
      </tr>
      <tr>
        <td><label>Drop Location:</label> </td>
        <td>'.$drp_l.'</td>
      </tr>
      <tr>
        <td><label>Time:</label></td>
        <td>'.$time.'</td>
      </tr>
      <tr>
        <td><label>Approver:</label> </td>
        <td>'.$approver.'</td>
      </tr>
      <tr>
        <td><label>Reason:</label> </td>
        <td>'.$reason.'</td>
      </tr>

      <tr>
          <div style="height:50px;">
        <td align="center" style="margin:0; border:2px solid blue; cursor:pointer; line-height:22px; background-color:#00a3df;text-align:center" ><a style="text-decoration:none;color:#ffffff;font-weight:bold;  text-align:center;" href="https://iisdev.ncrnet.ncr.com/cabsystem/1.0/user/show.php?lastid='.$lastid.'&approve=true">Approve</a></td>
        <td align="center" style="margin:0; border:2px solid blue; cursor:pointer; line-height:22px; background-color:#00a3df;text-align:center" ><a style="text-decoration:none;color:#ffffff;font-weight:bold;text-align:center;" href="https://iisdev.ncrnet.ncr.com/cabsystem/1.0/user/show.php?lastid='.$lastid.'&approve=false">Reject</a></td>
        </div>
      </tr>
    </tbody>

      <tfoot>
       
          <tr>
            <td colspan="2" ><strong>Please Request by Clicking Below Buttons !</strong></td>
          </tr>

      </tfoot>
    </table>


                                        <tr>
                                          <td colspan="4">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    <table width="570" align="center" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                
                                        <tr>
                                          <td align="center">
                                                <div style="text-align:center;width:100%;padding:40px 0">
                                                    <table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto;padding:0">
                                                    <tbody>
  
                                                    </tbody>
                                                  </table>
                                                </div>
                                          </td>
                                      </tr><tr><td>&nbsp;</td>
                                      </tr></tbody></table></td>
                                <td width="30" bgcolor="#eeeeee"></td>
                            </tr>
                            </tbody>
                            </table>
                        <table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
                            <tbody>
                              <tr>
                                  <td>
                                        <table width="630" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
                                        <tbody>
                                          <tr><td colspan="2" height="30"></td></tr>
                                            <tr>
                                              <td width="360" valign="top">
                                                  <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">&copy; 2017 NCR Corporation. All rights reserved.</div>
                                                  <div style="line-height:5px;padding:0;margin:0">&nbsp;</div>
                                                  <div style="color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0">Made in India</div>
                                            </td>
                                                <!--<td align="right" valign="top">
                                                  <span style="line-height:20px;font-size:10px"><a href="https://www.facebook.com/codexworld" target="_blank"><img src="http://i.imgbox.com/BggPYqAh.png" alt="fb"></a>&nbsp;</span>
                                                    <span style="line-height:20px;font-size:10px"><a href="https://twitter.com/codexworldblog" target="_blank"><img src="http://i.imgbox.com/j3NsGLak.png" alt="twit"></a>&nbsp;</span>
                                                    <span style="line-height:20px;font-size:10px"><a href="https://plus.google.com/+codexworld" target="_blank"><img src="http://i.imgbox.com/wFyxXQyf.png" alt="g"></a>&nbsp;</span>
                                                </td>-->
                                            </tr>
                                            <tr><td colspan="2" height="5"></td></tr>
                                           
                                        </tbody>
                                        </table>
                                    </td>
                          </tr>
                            </tbody>
                            </table>
                      </td>
                  </tr>
                </tbody>
                </table>
            </td>
    </tr>
  </tbody>
    </table>';
    $result = mail ($toAddr, $subject, $message, $headers);
?>