
<!-- ***********************************************************************************
  Page Name  : program2.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #2
  Purpose    : This page implements the use the text input fields, text area boxes, dropdown boxes, radio buttons, checkboxes, submit buttons, and reset buttons. HTML, php, and css are used in the process of creating this program. Ultimately, this program will allow users of my website to enter and sumbit data, that will then be handled by the controller. 

  Due Date   : 02/21/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->
 
    

<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS Program 2
    </title>  

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    <!-- <?php ?> is used to allow coding in php language -->
    <?php include('Simmons_header.php'); ?> <!-- header was called here --> 
    <br> 
    <?php include('mainMenu.php'); ?> <!-- mainMenu was called here -->
    <br>
    

    <form method="post" action="controller2.php"> <!-- this sends user input to the controller -->
      <!-- text input fields -->
      <font size=3 color="green"> <!-- all text from this point should be green -->
      <table style="width: 50%; margin: 0px auto; padding-right: 10%;"> <!-- start of table tag (padding-right will make the input box longer or shorter) --> 
        <!-- first row -->
        <tr> 
          <td style="width: 5%; text-align: right;">EA ID &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="EAID" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- second row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Email &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="Email" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- third row -->
        <tr> 
          <td style="width: 5%; text-align: right;">First Name &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="FirstName" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- fourth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Last Name &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="LastName" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- fifth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Street Address &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="StreetAddress" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- sixth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">City &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="City" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- seventh row -->
        <tr> 
          <td style="width: 5%; text-align: right;">State &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="State" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- eigth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Zip Code &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="ZipCode" value=" " style="width: 100%;">
          </td>
        </tr> 
        <!-- ninth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">Date &nbsp;</td> 
          <td style="width: 20%;"> 
            <input type="text" name="Date" value=" " style="width: 100%;">
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
            <textarea name="Comments" rows="5" cols="20"></textarea> 
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
              <option value="TS4 Lastest News"> TS4 Lastest News</option> 
              <option value="TS4 Patch Note Expert"> TS4 Patch Note Expert</option> 
              <option value="TS4 Best Mods"> TS4 Best Mods</option> 
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
                <td style="width: 10%;"><input type="radio" name="Game" value="Sims 1">Sims 1</td>  
                <td style="width: 13.2%;"><input type="radio" name="Game" value="Sims 2">Sims 2</td>
                <td style="width: 14.4%;"><input type="radio" name="Game" value="Sims 3">Sims 3</td>  
                <td style="width: 12%;"><input type="radio" name="Game" value="Sims 4">Sims 4</td> 
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
                <td style="width: 10%;"><input type="checkbox" name="PC" value="PC">PC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                <td style="width: 10%;"><input type="checkbox" name="Xbox" value="Xbox">Xbox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="width: 10%;"><input type="checkbox" name="PlayStation" value="PlayStation">PlayStation</td>  
                <td style="width: 12%;"><input type="checkbox" name="Mobile" value="Mobile">Mobile</td>
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
          <td style="width: 20%;" align=center>$message</td>
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
            <input type="reset" name="ClearScreen" value="Clear Screen">
          </td>
        </tr> 

      </table> <!-- end of table tag -->

    </form> <!-- end of form tag -->
      
    <!-- blank row (for space) --> 
    <tr> 
      <td><br></td>
    </tr>
      
    <?php include('mainMenu.php'); ?> <!-- calls mainMenu again -->

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) -->
