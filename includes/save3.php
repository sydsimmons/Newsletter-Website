<!-- ***********************************************************************************
  Page Name  : save3.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : If this page is called from the controller it will save all input into the table. 
  Due Date   : 03/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS save 3
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    
    <!-- this will display the input field label and the data that goes with it --> 
    <?php 

      //echo "Inserting record into table " .$tableName. "<br>";

      //trimming the primary key and then inserting data into table 
      $EAID=trim($EAID); 
      if(strlen($EAID)>0) 
      { 
        $sql="INSERT INTO customers ( 
          EAID, 
          Email,
          FirstName,
          LastName,          
          StreetAddress,          
          City,          
          State,          
          ZipCode,          
          Date,          
          Comments,          
          Newsletters,          
          Game,          
          PC,          
          Xbox,          
          PlayStation,          
          Mobile
          ) 
          VALUES
          ( 
          '$EAID',
          '$Email',
          '$FirstName',          
          '$LastName',          
          '$StreetAddress',          
          '$City',          
          '$State',          
          '$ZipCode',          
          '$Date',          
          '$Comments',          
          '$Newsletters',          
          '$Game',          
          '$PC',          
          '$Xbox',          
          '$PlayStation',          
          '$Mobile'
        )"; 
        

        if (mysqli_query($connection, $sql))         
        {         
          //echo "<br>New record created successfully";        
          $message = "<span style=\"color: blue;\">RECORD $EAID ADDED</span><br>";       
        }         
        else         
        {         
          //echo "<br>Error: " .$sql. "<br>" .mysqli_error($connection);         
          $message = "<span style=\"color: red;\">RECORD $EAID EXISTS</span><br>";       
        }       
        
      }// end of if(strlen 

      else 
      { 
        $message = "<span style=\"color: red;\">RECORD NOT ADDED<br> EA ID CAN NOT BE EMPTY</span><br>";
      }

    ?>  

    <!-- <center><font color="#CC33FF" face="Impact" size="5">You pressed the Save Button</font></center> -->

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
