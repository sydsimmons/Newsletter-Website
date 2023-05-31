<!-- ***********************************************************************************
  Page Name  : delete3.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : If this page is called from the controller3, it will remove data from table . 
  Due Date   : 03/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS delete 3
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->

    <!-- this will display the input field label and the data that goes with it --> 
    <?php 
      $record = "RECORD " .$EAID. " DELETED";
      
      $EAID = $_POST['EAID'];

      //deleting record 
      $sql = "DELETE FROM customers WHERE EAID='$EAID'"; 

      $EAID = trim($EAID);
      if (strlen($EAID) > 0)
      { 
        if (mysqli_query($connection, $sql) )
        {
          $message = "<span style =\"color: red;\">RECORD $EAID DELETED</span><br>";

        }                                    //end of if (mysqli_query($connection, $sql) )
        else
        {
          $message = "<span style =\"color: red;\">ERROR DELETING RECORD</span><br>";
        }

      }                                    //end of if (strlen($EAID) > 0)
      else
      {
        $message = "<span style =\"color: red;\">RECORD $EAID CAN NOT BE DELETED, IT DOES NOT EXISTS</span><br>";
      }

    ?>  

    
    

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
