
<!-- ***********************************************************************************
  Page Name  : controller2.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #2
  Purpose    : This page recieves the data from program 2 that is inputed by the user.

  Due Date   : 02/21/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS Controller 2
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
     
    <center> 
      <font color="#CC33FF" face="Impact" size="6">This is Controller2.php</font>
      <br>
      <br>
      <font color="#CC33FF" face="Impact" size="5">Called from Program 2</font>
    </center>  
    <br>
    
    <?php // allows php language 
      
      // $_POST retrieves data from ' ' field 
      $EAID = $_POST['EAID'];
      $Email = $_POST['Email'];
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $StreetAddress = $_POST['StreetAddress'];
      $City = $_POST['City'];
      $State = $_POST['State'];
      $ZipCode = $_POST['ZipCode'];
      $Date = $_POST['Date'];
      $Comments = $_POST['Comments'];
      $Newsletters = $_POST['Newsletters'];
      $Game = $_POST['Game'];
      $PC = $_POST['PC'];
      $Xbox = $_POST['Xbox'];
      $PlayStation = $_POST['PlayStation'];
      $Mobile = $_POST['Mobile'];
      
      $found =$_POST['found'];

      // these if else statements call other php files to be implemented 
      if ($_POST['Save'])
      { 
        include('save.php');
      }
      else if ($_POST['Find'])
      { 
        include('find.php');
      }
      else if ($_POST['Modify'])
      { 
        include('modify.php');
      }
      else if ($_POST['Delete'])
      { 
        include('delete.php');
      }
      else
      { 
        echo "<br><h1> you pressed UNKOWN button</h1>";   
      }
    ?> <!-- end of php -->

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
