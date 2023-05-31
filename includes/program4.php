<!-- ***********************************************************************************
  Page Name  : program4.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #4
  Purpose    : This is the front end of my website, simular to program 3 with a few changes 

  Due Date   : 4/14/2023

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->
 
    

<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      SimmonsS Program 4
    </title>  

     <script>
            
         
      function currentTime() 
      {
         var today   = new Date();
         var hour    = today.getHours();
         var minutes = today.getMinutes();
         var sec     = today.getSeconds();
      
         minutes = checkTime(minutes);
         sec     = checkTime(sec);
         
         document.getElementById('txt').innerHTML = "Current Time : "+hour+":"+minutes+":"+sec;
      
         var t = setTimeout(function(){currentTime()},500);
              
      }


      function checkTime(i) 
      {
         if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
         return i;
      }


      /*
      getDate()	          Returns the day of the month (from 1-31)
      getDay()	          Returns the day of the week (from 0-6)
      getFullYear()	  Returns the year (four digits)
      getHours()  	  Returns the hour (from 0-23)
      getMilliseconds()   Returns the milliseconds (from 0-999)
      getMinutes()	  Returns the minutes (from 0-59)
      getMonth()	  Returns the month (from 0-11)
      getSeconds()	  Returns the seconds (from 0-59)
      getTime()	          Returns the number of milliseconds since midnight Jan 1, 1970
      getTimezoneOffset() Returns the time difference between UTC time and local time, in minutes
      getUTCDate()	  Returns the day of the month, according to universal time (from 1-31)
      getUTCDay()	  Returns the day of the week, according to universal time (from 0-6)
      getUTCFullYear()	  Returns the year, according to universal time (four digits)
      getUTCHours()	  Returns the hour, according to universal time (from 0-23)
      getUTCMilliseconds()Returns the milliseconds, according to universal time (from 0-999)
      getUTCMinutes()	  Returns the minutes, according to universal time (from 0-59)
      getUTCMonth()	  Returns the month, according to universal time (from 0-11)
      getUTCSeconds()	  Returns the seconds, according to universal time (from 0-59)
      getYear()	          Deprecated. Use the getFullYear() method instead
      parse()	          Parses a date string and returns the number of milliseconds since January 1, 1970
      
      setDate()           Sets the day of the month of a date object
      setFullYear()	  Sets the year (four digits) of a date object
      setHours()	  Sets the hour of a date object
      setMilliseconds()	  Sets the milliseconds of a date object
      setMinutes()	  Set the minutes of a date object
      setMonth()	  Sets the month of a date object
      setSeconds()	  Sets the seconds of a date object
      setTime()	          Sets a date to a specified number of milliseconds after/before January 1, 1970
      setUTCDate()	  Sets the day of the month of a date object, according to universal time
      setUTCFullYear()	  Sets the year of a date object, according to universal time (four digits)
      setUTCHours()	  Sets the hour of a date object, according to universal time
      setUTCMilliseconds()Sets the milliseconds of a date object, according to universal time
      setUTCMinutes()	  Set the minutes of a date object, according to universal time
      setUTCMonth()	  Sets the month of a date object, according to universal time
      setUTCSeconds()	  Set the seconds of a date object, according to universal time
      setYear()	          Deprecated. Use the setFullYear() method instead
      toDateString()	  Converts the date portion of a Date object into a readable string
      toGMTString()	  Deprecated. Use the toUTCString() method instead
      toISOString()	  Returns the date as a string, using the ISO standard
      toJSON()	          Returns the date as a string, formatted as a JSON date
      toLocaleDateString()Returns the date portion of a Date object as a string, using locale conventions
      toLocaleTimeString()Returns the time portion of a Date object as a string, using locale conventions
      toLocaleString()	  Converts a Date object to a string, using locale conventions
      toString()	  Converts a Date object to a string
      toTimeString()	  Converts the time portion of a Date object to a string
      toUTCString()	  Converts a Date object to a string, according to universal time
      UTC()	          Returns the number of milliseconds in a date since midnight of 
                              January 1, 1970, according to UTC time
      valueOf()	          Returns the primitive value of a Date object 
      */




   
   </script>

    <style>
      .tooltip 
      {
        position: relative;
        display: inline-block;
        
      }


      /* FIRST FIELD */

      .tooltip .tooltiptext1 
      {
        visibility: hidden;
        width: 120px;
        background-color: #FF9999;
        color: Seashell;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 1s;
      }

      .tooltip .tooltiptext1::after 
      {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: red transparent transparent transparent;
      }

      .tooltip:hover .tooltiptext1 
      {
        visibility: visible;
        opacity: 1;
      }

    </style>

  </head>                    <!-- end of the head section -->
   
   
  <body onload="currentTime()">                     <!-- start of the body section -->
    
    <!-- <?php ?> is used to allow coding in php language -->
    <?php include('Simmons_header4.php'); ?> <!-- header was called here --> 
    <br> 


    <table style="width: 115%; margin: 0px auto; padding-right: 0%;" align="center";>
      <tr>
        <td>
          <script>

            loggedInTime();
             
            var temp1;
      
            function loggedInTime( temp )
            {
            var tiempo = new Date();  
            var temp2 =  "Logged in at &nbsp;: " + tiempo;
            temp1 = temp2;
            document.write( temp2 );
            }
  

           //document.write( " " + "I am next " + temp1 ); 

           currentTime();
      

          </script>
        </td>

        <td>

          <div id="txt"></div>

        </td>
      </tr>
    </table>

    <center><font size="5" face="Impact" color="#FF6666">Program 4</font></center>
    <?php include('mainMenu4.php'); ?> <!-- mainMenu was called here -->
    <br>
    
    <form method="post" action="controller4.php"> <!-- this sends user input to the controller -->
      <!-- text input fields -->
      <font size=3 color="#FF6666"> <!-- all text from this point should be coral -->
      <table style="width: 50%; margin: 0px auto; padding-right: 10%;"> <!-- start of table tag (padding-right will make the input box longer or shorter) --> 
        <!-- first row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">EA ID &nbsp;
            <span class="tooltiptext1"> Enter your EA ID here.</span></td>
            </div>
          <td style="width: 20%;"> 
            <input type="text" name="EAID" placeholder="EA ID" value="<?php echo $EAID ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- second row -->
        <tr> 
          <td style="width: 5%; text-align: right;"> 
            <div class="tooltip">Email &nbsp;
            <span class="tooltiptext1"> Enter your email here.</span></td>
            </div>
          <td style="width: 20%;"> 
            <input type="text" name="Email" placeholder="Email" value="<?php echo $Email ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- third row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">First Name &nbsp;
            <span class="tooltiptext1"> Enter your first name here.</span></td>
            </div>
          <td style="width: 20%;"> 
            <input type="text" name="FirstName" placeholder="First Name" value="<?php echo $FirstName ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- fourth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">Last Name &nbsp;
            <span class="tooltiptext1"> Enter your last name here.</span></td>
            </div>
          <td style="width: 20%;"> 
            <input type="text" name="LastName" placeholder="Last Name" value="<?php echo $LastName ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- fifth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">Street Address &nbsp;
            <span class="tooltiptext1"> Enter your street address here.</span></td>
            </div> 
          <td style="width: 20%;"> 
            <input type="text" name="StreetAddress" placeholder="Street Address" value="<?php echo $StreetAddress ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- sixth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">City &nbsp;
            <span class="tooltiptext1"> Enter your city address here.</span></td>
            </div> 
          <td style="width: 20%;"> 
            <input type="text" name="City" placeholder="City" value="<?php echo $City ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- seventh row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">State &nbsp;
            <span class="tooltiptext1"> Enter your state address here.</span></td>
            </div> 
          <td style="width: 20%;"> 
            <input type="text" name="State" placeholder="State" value="<?php echo $State ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- eigth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">Zip Code &nbsp;
            <span class="tooltiptext1"> Enter your Zip Code here.</span></td>
            </div> 
          <td style="width: 20%;"> 
            <input type="text" name="ZipCode" placeholder="Zip Code" value="<?php echo $ZipCode ?>" style="width: 100%;">
          </td>
        </tr> 
        <!-- ninth row -->
        <tr> 
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">Date &nbsp;
            <span class="tooltiptext1"> Enter the current date here.</span></td>
            </div> 
          <td style="width: 20%;"> 
            <input type="text" name="Date" placeholder="Date" value="<?php echo $Date ?>" style="width: 100%;">
          </td> 
        </tr>  

       <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>
      
        <!-- text area --> 
        <tr>  
          <td style="width: 5%; text-align: right;">
            <div class="tooltip">Comments &nbsp;
            <span class="tooltiptext1"> Enter any additional comments you have here.</span></td>
            </div>
          <td style="width: 20%;"> 
            <textarea name="Comments" placeholder="Comments" rows="5" cols="20"><?php echo $Comments ?></textarea> 
          </td>
        </tr> 
      
        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>
      
        <!-- dropdown box --> 
        <tr> 
          <td style="width: 12%; text-align: right;">
            <div class="tooltip">Newsletter &nbsp;
            <span class="tooltiptext1"> Select which newsletter you are interested in subscribing to.</span></td>
            </div> 
          <td style="width: 20%; text-align: right;"> 
            <select name="Newsletters" style="width: 100%" size="1";>
              <option value="TS4 Lastest News" <?php if ($Newsletters == "TS4 Lastest News") echo selected ?> > TS4 Lastest News</option> 
              <option value="TS4 Patch Note Expert" <?php if ($Newsletters == "TS4 Patch Note Expert") echo selected ?>> TS4 Patch Note Expert</option> 
              <option value="TS4 Best Mods" <?php if ($Newsletters == "TS4 Best Mods") echo selected ?>> TS4 Best Mods</option> 
            </select>
          </td>
        </tr> 

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>

        <!-- radio buttons --> 
        <tr> 
          <td style="width: 12%; text-align: right;"> 
            <div class="tooltip">Preferred Game &nbsp;
            <span class="tooltiptext1"> Select the game you prefer to play the most.</span></td>
            </div>
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
          <td style="width: 12%; text-align: right"> 
            <div class="tooltip">Console Type &nbsp;
            <span class="tooltiptext1"> Select the game console(s) you use.</span></td>
            </div>
          <td style="width: 20%; text-align: left;"> 
            <table style="margin: 0px auto;">
              <tr> 
                <td style="width: 10%;"><input type="checkbox" name="PC" <?php if ($PC == "PC") echo checked;?> value="PC">PC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                <td style="width: 10%;"><input type="checkbox" name="Xbox" <?php if ($Xbox == "Xbox") echo checked;?> value="Xbox">Xbox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="width: 10%;"><input type="checkbox" name="PlayStation" <?php if ($PlayStation == "PlayStation") echo checked;?> value="PlayStation">PlayStation</td>  
                <td style="width: 12%;"><input type="checkbox" name="Mobile" <?php if ($Mobile == "Mobile") echo checked;?> value="Mobile">Mobile</td>
              </tr> 
            </table>
          </td> 
        </tr>

        <!-- blank row (for space) --> 
        <tr> 
          <td><br></td>
        </tr>

      </table> <!-- end of table tag -->  


      <table style="width: 60%; margin: 0px auto; padding-right: 10%;">  <!-- start of table tag -->

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
            <input type="submit" name="Contact_Me" value="Contact_Me">&nbsp;
            <input type="submit" name="Help" value="Help">&nbsp; 
            <input type="submit" name="About" value="About">
          </td> 
          
        </tr> 

      </table> <!-- end of table tag -->

    </form> <!-- end of form tag -->
      
    <!-- blank row (for space) --> 
    <tr> 
      <td><br></td>
    </tr>
      
    <?php include('mainMenu4.php'); ?> <!-- calls mainMenu again -->  
    <br>
    <center><font color="#FF6666" face="Impact" size="5">Sydney Simmons</font></center>

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) -->
