<!-- ***********************************************************************************
  Page Name  : contact_me_controller.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : This page recieves the data from program 3 that is inputed by the user.

  Due Date   : 03/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS contact me Controller 
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    <font color="black" face="Courier New"> 
    <?php 
    
      if(isset($_POST['Submit'])) 
      { 
        $to             = "ssimm051@fiu.edu"; //michael.robinson@cs.fiu.edu 
        $subject        = "Sydney Simmons CGS4854"; 
        //$headers        = 'Content-Type: text/html;'; 
        $YourEmail      = $_POST['YourEmail']; 
        $LastNameCM     = $_POST['LastNameCM']; 
        $FirstNameCM    = $_POST['FirstNameCM'];  
        $WebBrowserCM   = $_POST['WebBrowserCM']; 
        $HelpCM         = $_POST['HelpCM']; 
        $MoreInfoCM     = $_POST['MoreInfoCM']; 
        $SubscriptionCM = $_POST['SubscriptionCM']; 
        $OfAgeCM        = $_POST['OfAgeCM'];
        $CommentsCM     = $_POST['CommentsCM'];

        //echo = "<!DOCTYPE HTML><html><body><p style="font-family: Courier"></p></body></html>";
        $body = " Your Email:\t\t $YourEmail\nLast Name:\t\t$LastNameCM\nFirst Name:\t\t$FirstNameCM\n\nWeb Browser:\t\t$WebBrowserCM\nContact Reason:\t\t$HelpCM\nContact Reason:\t\t$MoreInfoCM\nContact Reason:\t\t$SubscriptionCM\n\nAre You Of Age:\t        $OfAgeCM\n\nComments:\t\t$CommentsCM\n";
        mail($to, $subject, $body);

        include('contactMeSend.php');
        //include('../includes/selections.php');

      } 
      else 
      { 
        include('contact_me.php');
        //include('../includes/selections.php');
   
      }

    ?> <!-- end of php -->
    </font>

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
