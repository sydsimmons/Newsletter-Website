

<!-- ***********************************************************************************
  Page Name  : save.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #2
  Purpose    : If this page is called from the controller it will display data given by the user and let the user know they pressed the save button. 
  Due Date   : 02/21/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS save
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    <!-- this will display the input field label and the data that goes with it --> 
    <?php 
      echo 'EA ID: '.$EAID."<br>"; 
      echo 'Email: '.$Email."<br>"; 
      echo 'First Name: '.$FirstName."<br>"; 
      echo 'Last Name: '.$LastName."<br>"; 
      echo 'Street Address: '.$StreetAddress."<br>"; 
      echo 'City: '.$City."<br>"; 
      echo 'State: '.$State."<br>"; 
      echo 'Zip Code: '.$ZipCode."<br>"; 
      echo 'Date: '.$Date."<br>"; 
      echo 'Comments: '.$Comments."<br>"; 
      echo 'Newsletter: '.$Newsletters."<br>"; 
      echo 'Preferred Game: '.$Game."<br>"; 
      echo 'Console Type: '.$PC."<br>"; 
      echo 'Console Type: '.$Xbox."<br>"; 
      echo 'Console Type: '.$PlayStation."<br>"; 
      echo 'Console Type: '.$Mobile."<br>"; 

    ?>  

    <center><font color="#CC33FF" face="Impact" size="5">You pressed the Save Button</font></center>

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
