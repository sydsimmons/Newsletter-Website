<!-- ***********************************************************************************
  Page Name  : find3.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : If this page is called from the controller it will find and display all data corrisponding to the EA ID. 
  Due Date   : 03/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS find 3
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    
    
     <?php  
     
    /*  echo "find3.php EAID = [".$EAID."]<br>"; 
      echo $Email; 
      echo $FirstName; 
      echo $LastName; 
      echo $StreetAddress; 
      echo $City; 
      echo $State; 
      echo $ZipCode; 
      echo $Date; 
      echo $Comments;
      echo $Newsletters; 
      echo $Game; 
      echo $PC; 
      echo $Xbox; 
      echo $PlayStation; 
      echo $Mobile;

      echo "find3.php table: " .$tableName. "<br>"; 

      echo "<br>find3.php found = [" .$found. "]"; //found (F was capitalized)
      $found = $EAID; 
      
      echo "<br>find3.php Found = EAID = [" .$found. "]";  //found (F was capitalized)      
    */ 
      $sql ="SELECT * FROM customers ORDER BY EAID";      
      $sql ="SELECT * FROM customers where EAID = '$EAID'";       
      
      if ($result=mysqli_query($connection,$sql) )      
      { 
        
        $rowcount=mysqli_num_rows($result);
        while ( $row = mysqli_fetch_array( $result ) )                    
        {                     
          $EAID = $row['EAID'];                    //primary key 
          $Email = $row['Email'];                  //type = text
          $FirstName = $row['FirstName'];          //type = text 
          $LastName = $row['LastName'];            //type = text
          $StreetAddress = $row['StreetAddress'];  //type = text  
          $City = $row['City'];                    //type = text
          $State = $row['State'];                  //type = text
          $ZipCode = $row['ZipCode'];              //type = text
          $Date = $row['Date'];                    //type = text
          $Comments = $row['Comments'];            //type = textarea 
          $Newsletters = $row['Newsletters'];      //type = dropdown
          $Game = $row['Game'];                    //type = radio 
          $PC = $row['PC'];                        //type = checkbox
          $Xbox = $row['Xbox'];                    //type = checkbox
          $PlayStation = $row['PlayStation'];      //type = checkbox 
          $Mobile = $row['Mobile'];                //type = checkbox                 
        }// end of while ( $row = mysqli_fetch_array( $result ) ) 

        //trimming primary key                         
        $EAID=trim($EAID);

        if ($rowcount)                         
        {                                   
          //$found = $EAID;                                   
          $message = "<span style=\"color: blue;\">RECORD $EAID FOUND</span><br>";                                  
        }//end of if($rowcount)
        else if(strlen($EAID) ==0)
        { 
          $message = "<span style=\"color: red;\">EA ID CAN NOT BE EMPTY</span><br>";

        }//end of else if  
        else                                                                
        {                                                               
          $message = "<span style=\"color: red;\">RECORD $EAID NOT FOUND</span><br>";                                                              
                                                                                                                     
        }// end of else
        
      }// end of if ($result=mysqli_query($connection,$sql) )
      


     ?>
    

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
