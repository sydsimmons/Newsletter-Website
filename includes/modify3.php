<!-- ***********************************************************************************
  Page Name  : modify3.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : If this page is called from the controller it will modify the records that corrispond with the EA ID found. 
  Due Date   : 03/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS modify 3
    </title>  

  </head>  
   
   
  <body>                     <!-- start of the body section -->
    <!-- this will display the input field label and the data that goes with it --> 
    <?php 
      //$found = $_POST['found'];
      $EAID = $_POST['EAID']; // is thsi ok?? $EAID (primary key) instead of found worked 

      if ( strlen(trim($EAID)) > 0 )
      {
        $query = "UPDATE customers
          SET Email           = '$Email',
              FirstName       = '$FirstName',
              LastName        = '$LastName',          
              StreetAddress   = '$StreetAddress',          
              City            = '$City',          
              State           = '$State',          
              ZipCode         = '$ZipCode',          
              Date            = '$Date',          
              Comments        = '$Comments',          
              Newsletters     = '$Newsletters',          
              Game            = '$Game',          
              PC              = '$PC',          
              Xbox            = '$Xbox',          
              PlayStation     = '$PlayStation',          
              Mobile          = '$Mobile'
              
          WHERE EAID = '$EAID'";
        
        $sql = mysqli_query( $connection,$query ); 

        if ($sql)
        {
          $message = "<span style=\"color: blue;\">RECORD $EAID MODIFIED</span><br>";
          
        }//end of if($sql) 
        else
        {
          $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br>";

        }
      }//end of if if (  ( strlen(trim($EAID)) > 0 ) ) 
      else
      {
        $message ="<span style=\"color: red;\">RECORD $EAID CAN NOT BE MODIFIED, FIND IT FIRST</span><br>";
      }//end of else
      
    ?>  
    

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
