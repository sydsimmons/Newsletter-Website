<!-- ***********************************************************************************
  Page Name  : contact_me.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : 

  Due Date   : //2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS contact_me
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    <?php include('Simmons_header3.php'); ?>
    <br>
    <!-- CONTACT ME --> 
    <center> 
      <strong><font color="red" face="Arial" size="5">Contact Me</font></strong>
    </center>
    <?php include('mainMenu3.php'); ?> 
    <br> 

    <form method="post" action="contact_me_controller.php"> 

      <font size=3 color="#6666FF">
      <table style="width: 50%; margin: 0px auto; padding-right: 10%;">
        <!-- first row -->
        <tr> 
          <td style="width: 5%; text-align: left;">Your Email &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="YourEmail" value="<?php echo $YourEmail ?>" style="width: 100%;">
          </td>
        </tr>
        <!-- second row --> 
        <tr> 
          <td style="width: 5%; text-align: left;">Last Name &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="LastNameCM" value="<?php echo $LastNameCM ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- third row --> 
        <tr> 
          <td style="width: 5%; text-align: left;">First Name &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="FirstNameCM" value="<?php echo $FirstNameCM ?>" style="width: 100%;">
          </td>
        </tr>

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr> 

        <!-- radio buttons --> 
        <tr> 
          <td style="width: 12%; text-align: left;"> Current Web Browser &nbsp;</td> 
          <td style="width: 20%; text-align: left;"> 
            <table style="margin: 0px auto;">
              <tr>  
                <td style="width: 9.9%;"><input type="radio" <?php if ($WebBrowserCM == "Chrome") echo "checked";?> name="WebBrowserCM" value="Chrome">Chrome</td>  
                <td style="width: 13.3%;"><input type="radio" <?php if ($WebBrowserCM == "Microsoft Edge") echo "checked";?> name="WebBrowserCM" value="Microsoft Edge">Microsoft Edge</td>
                <td style="width: 13.7%;"><input type="radio" <?php if ($WebBrowserCM == "Safari") echo "checked";?> name="WebBrowserCM" value="Safari">Safari</td> 
              </tr> 
            </table>
          </td> 
        </tr>
        
        <!-- check boxes --> 
        <tr> 
          <td style="width: 12%; text-align: left"> Contact Reason(s) &nbsp;</td>
          <td style="width: 23.2%; text-align: left"> 
            <table style="margin: 0px auto;">
              <tr> 
                <td style="width: 9.7%;"><input type="checkbox" name="HelpCM" <?php if ($HelpCM == "HelpCM") echo checked;?> value="HelpCM">Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                <td style="width: 4%;"><input type="checkbox" name="MoreInfoCM" <?php if ($MoreInfoCM == "MoreInfoCM") echo checked;?> value="MoreInfoCM">Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="width: 9.1%;"><input type="checkbox" name="SubscriptionCM" <?php if ($SubscriptionCM == "SubscriptionCM") echo checked;?> value="SubscriptionCM">Subscription</td>
              </tr> 
            </table>
          </td> 
        </tr>

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr> 

        <!-- dropdown box --> 
        <tr> 
          <td style="width: 12%; text-align: left;">Are You 18 Or Older? &nbsp;</td> 
          <td style="width: 20%; text-align: right;"> 
            <select name="OfAgeCM" style="width: 100%" size="1";>
              <option value="Yes" <?php if ($OfAgeCM == "Yes") echo selected ?> > Yes</option> 
              <option value="No" <?php if ($OfAgeCM == "No") echo selected ?>> No</option> 
            </select>
          </td>
        </tr> 

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr> 

        <!-- text area --> 
        <tr>  
          <td style="width: 5%; text-align: left;">Comments &nbsp;</td>
          <td style="width: 20%;"> 
            <textarea name="CommentsCM" rows="5" cols="20"><?php echo $CommentsCM ?></textarea> 
          </td>
        </tr>
 
        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>
      
        <!-- submit and clear buttons --> 
        <tr> 
          <td style="width: 7%;"></td> 
          <td style="width: 20%;" align=center>
            <input type="submit" name="Submit" value="Submit">&nbsp;
            <input type="reset" name="Clear" value="Clear"> 
          </td>
        </tr> 

      </table>
    </form> 

    <!-- blank row (for space) --> 
    <tr> 
      <td><br></td>
    </tr>
      
    <?php include('mainMenu3.php'); ?> <!-- calls mainMenu again -->  

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
  
