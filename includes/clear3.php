<!-- ***********************************************************************************
  Page Name  : clear3.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : If this page is called from the controller it will clear the data fields. 
  Due Date   : 03/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS clear 3
    </title>  

  </head>  
   
   
  <body>                     <!-- start of the body section -->
    <!-- this will display the input field label and the data that goes with it --> 
    <?php 
      //clearing the date inside the variables                                           
          $EAID = ""; 
          $Email = ""; 
          $FirstName = ""; 
          $LastName = ""; 
          $StreetAddress = ""; 
          $City = ""; 
          $State = ""; 
          $ZipCode = ""; 
          $Date = ""; 
          $Comments = "";
          $Newsletters = ""; 
          $Game = ""; 
          $PC = ""; 
          $Xbox = ""; 
          $PlayStation = ""; 
          $Mobile = "";                                           
                                                                         
          $found = ""; 
      
    ?>  
    

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
