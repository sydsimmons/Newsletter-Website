
<!-- ***********************************************************************************
  Page Name  : program3.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #3
  Purpose    : This is the front end of my website, simular to program 2 with a few changes 

  Due Date   : 3/23/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->
 
 <?php 
            $Newsletters = $Newsletters ?? '';
 ?>

<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS Program 3
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    <!-- <?php ?> is used to allow coding in php language -->
    <?php include('Simmons_header3.php'); ?> <!-- header was called here --> 
    <br> 
    <?php include('mainMenu3.php'); ?> <!-- mainMenu was called here -->
    <br>
    

    <form method="post" action="controller3.php"> <!-- this sends user input to the controller -->
      <!-- text input fields -->
      <font size=3 color="#6666FF"> <!-- all text from this point should be green -->
      <table style="width: 50%; margin: 0px auto; padding-right: 10%;"> <!-- start of table tag (padding-right will make the input box longer or shorter) --> 
        <!-- first row -->
        <tr> 
          <td style="width: 5%; text-align: right;">EA ID &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="EAID" value="<?php echo $EAID ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- second row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Email &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="Email" value="<?php echo $Email ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- third row -->
        <tr> 
          <td style="width: 5%; text-align: right;">First Name &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="FirstName" value="<?php echo $FirstName ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- fourth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Last Name &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="LastName" value="<?php echo $LastName ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- fifth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Street Address &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="StreetAddress" value="<?php echo $StreetAddress ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- sixth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">City &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="City" value="<?php echo $City ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- seventh row -->
        <tr> 
          <td style="width: 5%; text-align: right;">State &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="State" value="<?php echo $State ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- eigth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Zip Code &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="ZipCode" value="<?php echo $ZipCode ?? ''; ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- ninth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Date &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="Date" value="<?php echo $Date ?? ''; ?>" style="width: 100%;">
          </td> 
        </tr>  

       <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>
      
        <!-- text area --> 
        <tr>  
          <td style="width: 5%; text-align: right;">Comments &nbsp;</td>
          <td style="width: 20%;"> 
            <textarea name="Comments" rows="5" cols="20"><?php echo $Comments ?? ''; ?></textarea> 
          </td>
        </tr> 
      
        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>
      
        <!-- dropdown box --> 
        <tr> 
          <td style="width: 12%; text-align: right;">Newsletter &nbsp;</td> 
          <td style="width: 20%; text-align: right;"> 
         
            <select name="Newsletters" style="width: 100%" size="1";>
              <option value="TS4 Lastest News" <?php if ($Newsletters == "TS4 Lastest News") echo 'selected'; ?> > TS4 Lastest News</option> 
              <option value="TS4 Patch Note Expert" <?php if ($Newsletters == "TS4 Patch Note Expert") echo 'selected'; ?>> TS4 Patch Note Expert</option> 
              <option value="TS4 Best Mods" <?php if ($Newsletters == "TS4 Best Mods") echo 'selected'; ?>> TS4 Best Mods</option> 
            </select>
          </td>
        </tr> 

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>

        <!-- radio buttons --> 
        <tr> 
          <td style="width: 12%; text-align: right;"> Preferred Game &nbsp;</td> 
          <td style="width: 20%; text-align: left;"> 
            <table style="margin: 0px auto;">
              <tr>  
                <td style="width: 10%;"><input type="radio" <?php if ($Game == "Sims 1") echo "checked";?> name="Game" value="Sims 1">Sims 1</td>  
                <td style="width: 13.2%;"><input type="radio" <?php if ($Game == "Sims 2") echo "checked";?> name="Game" value="Sims 2">Sims 2</td>
                <td style="width: 14.4%;"><input type="radio" <?php if ($Game == "Sims 3") echo "checked";?> name="Game" value="Sims 3">Sims 3</td>  
                <td style="width: 12%;"><input type="radio" <?php if ($Game == "Sims 4") echo "checked";?> name="Game" value="Sims 4">Sims 4</td> 
              </tr> 
            </table>
          </td> 
        </tr>  

        <!-- check boxes --> 
        <tr> 
          <td style="width: 12%; text-align: right"> Console Type &nbsp;</td>
          <td style="width: 20%; text-align: left;"> 
            <table style="margin: 0px auto;">
              <tr> 
                <td style="width: 10%;"><input type="checkbox" name="PC" <?php if ($PC == "PC") echo 'checked';?> value="PC">PC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                <td style="width: 10%;"><input type="checkbox" name="Xbox" <?php if ($Xbox == "Xbox") echo 'checked';?> value="Xbox">Xbox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="width: 10%;"><input type="checkbox" name="PlayStation" <?php if ($PlayStation == "PlayStation") echo 'checked';?> value="PlayStation">PlayStation</td>  
                <td style="width: 12%;"><input type="checkbox" name="Mobile" <?php if ($Mobile == "Mobile") echo 'checked';?> value="Mobile">Mobile</td>
              </tr> 
            </table>
          </td> 
        </tr>

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>

      </table> <!-- end of table tag -->  


      <table style="width: 50%; margin: 0px auto; padding-right: 10%;">  <!-- start of table tag -->

        <!-- displaying $message --> 
        <tr> 
          <td style="width: 7%;"></td> 
          <td style="width: 20%;" align=center> 
            <?php echo $message ?> 
          </td>
        </tr>

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>
      
        <!-- save, find, modify, delete, and clearScreen buttons --> 
        <tr> 
          <td style="width: 7%;"></td> 
          <td style="width: 20%;" align=center>
            <input type="submit" name="Save" value="Save">&nbsp;
            <input type="submit" name="Find" value="Find">&nbsp;
            <input type="submit" name="Modify" value="Modify">&nbsp;
            <input type="submit" name="Delete" value="Delete">&nbsp;
            <input type="submit" name="Clear" value="Clear">&nbsp; 
            <input type="submit" name="Contact_Me" value="Contact_Me"> 
          </td>
        </tr> 

      </table> <!-- end of table tag -->

    </form> <!-- end of form tag -->
      
    <!-- blank row (for space) --> 
    <tr> 
      <td><br></td>
    </tr>
      
    <?php include('mainMenu3.php'); ?> <!-- calls mainMenu again -->  
    <br>
    <center><font color="#6666FF" face="Impact" size="5">Sydney Simmons</font></center>

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) -->
