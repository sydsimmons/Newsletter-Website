<!-- ***********************************************************************************
  Page Name  : controller3.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : This page recieves the data from program 3 that is inputed by the user, creates a table called customers and inputs the data into the table

  Due Date   : 03/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS Controller 3
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
     
    <?php 
      // connecting to mysql 
      //
      $connection = mysqli_connect("ocelot.aul.fiu.edu", "spr23_ssimm051", "6185953", "spr23_ssimm051"); 
      if (mysqli_connect_error()) 
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      } 
      else 
      {
        //
        //
        $dbName = "spr23_ssimm051";
        $db_selected = mysqli_select_db($connection, $dbName); 

        if (!$db_selected) 
        { 
          die($dbName . ' does not exist, can\'t use it ' . mysqli_error());
        } 
        else 
        {
          //echo "I selected database : " .$db_selected. " " .$dbName. "<br></h3>"; 
          //accessing table
 
          $tableName = "customers";
          $query = mysqli_query( $connection, "SELECT * FROM $tableName" ); 
          
 
          //if the table did not exist this will create it 
          if(!$query)
          {
            echo " The " .$tableName. " does not exists<br>";
            echo "<br>Creating table : " .$tableName. "<br>";

            // creating table ing mysql (CHANGE VARCHAR NUMBERS
            $sql = "CREATE TABLE ".$tableName."(
              EAID VARCHAR(30) NOT NULL,
              PRIMARY KEY(EAID),
              Email VARCHAR(60),               
	      FirstName VARCHAR(30),               
	      LastName VARCHAR(30),               
	      StreetAddress VARCHAR(60),               
	      City VARCHAR(30),               
	      State VARCHAR(20),               
	      ZipCode VARCHAR(20),               
	      Date VARCHAR(20),               
	      Comments VARCHAR(200),               
	      Newsletters VARCHAR(60),               
	      Game VARCHAR(20),               
	      PC VARCHAR(20),               
	      Xbox VARCHAR(20),               
	      PlayStation VARCHAR(20),               
	      Mobile VARCHAR(20) 
              )";               
	                  
	    $result = mysqli_query( $connection, $sql );
                              
	    //confirm that table was created                     
	    if ($result)                     
	    {                     
	      echo "table " .$tableName. " created<br>";                   
	    }                     
	    else                     
	    {                    
	      die ("Can\'t create " .$tableName. " " .mysqli_error() );                   
	    }
	  
          }// end of if !query
        } //end of else 
      }//end of else 
    
    
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
      
      $found = $_POST['found'];

      // these if else statements call other php files to be implemented 
      if ($_POST['Save'])
      { 
        include('save3.php'); 
        include('program3.php');
      }
      else if ($_POST['Find'])
      { 
        include('find3.php'); 
        include('program3.php');
      }
      else if ($_POST['Modify'])
      { 
        include('modify3.php');
        include('program3.php');
      }
      else if ($_POST['Delete'])
      { 
        include('delete3.php');
        include('program3.php');
      } 
      else if ($_POST['Clear'])
      {
        include('clear3.php');
        include('program3.php');
      }
      else if ($_POST['Contact_Me'])
      {
        include('contact_me.php');
      } 
      else if ($_POST['contact_me_controller'])
      {
        include('contact_me_controller.php');
      }
      else
      { 
        echo "<br><h1> you pressed UNKOWN button</h1>";   
      } 
      // closes mysqli
      mysqli_close($connection);
      // calls and goes back to program 3 
      

    ?> <!-- end of php -->

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
