<!-- ***********************************************************************************
  Page Name  : about.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #4
  Purpose    : This page provides information about my website

  Due Date   : 04/14/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      about 
    </title>  

    <style type="text/css">
        
      .aboutHeadings1 /*Program 1*/ 
      { 
        font-family: monospace; 
        font-size:12pt;
        style="height:5px";
        color: mediumvioletred;
        /*background-color:red;*/
      }
       
      .aboutHeadings2 /*Program 2*/
      { 
        font-family:monospace; 
        font-size:12pt;
        style="height:5px";
        color: mediumvioletred;
      }
         
      .aboutHeadings3 /*Program 3*/
      { 
        font-family:monospace; 
        font-size:12pt;
        style="height:5px";
        color: mediumvioletred;
      }
        
        
      .aboutHeadings4 /*Program 4*/
      { 
        font-family:monospace; 
        font-size:20pt;
        style="height:5px";
        color: mediumvioletred;
      }
        
    </style> 
  </head>                    <!-- end of the head section -->
   
   
  <body> 

    <?php include('aboutMainMenu.php'); ?> <!-- mainMenu was called here -->
    <br>
    <center><font size="8" color="mediumvioletred" face="monospace"><b>ABOUT</b></font></center>
    <br>
    <center>
    <table width="80%" border="1" bordercolor="maroon";>
      <tr>
      <td>
        <center><font size="3">Welcome to My Sims News Weekly! 
          <br>Subscribe to our newsletters to recieve information and updates about The Sims franchise.
          <br>This about page is intended to provide you with more information about the progression of this project/program. 
          <br>*This website is not affiliated with EA or The Sims*
          <br>This is a Teaching Webesite
          </font>
        </center>
        <br>
        <br>
        <center><a class="aboutHeadings1"><b><font size="5">&nbsp;Program 1&nbsp;</font></b></a>
        <br>
                 
        <ul style="list-style-type:circle">
          <li>In the pages of this program you can view my thoughts and opinions about Sims related content.
          <br>You can also view and click on image to navigate to a related website.
                
          </li>
        </ul>

        <a class="aboutHeadings2"><b><font size="5">&nbsp;Program 2&nbsp;</font></b></a>
        <br>

        <ul style="list-style-type:circle">
          <li>In this program, you can enter your contact informaton in the text fields. You can also check/select your preferred Sims game and the consoles you play with. 
          </li>
        </ul>

        <a class="aboutHeadings3"><b><font size="5">&nbsp;Program 3&nbsp;</font></a></b><br>

        <ul style="list-style-type:circle">
          <li>This program allows for any input data to be stored in a database. 
          <br>You, the user, are able to save, find, modify, delete, and clear any data from the database. 
          </li>
        </ul>

        <a class="aboutHeadings4"><b><font size="5">&nbsp;Program 4&nbsp;</font></b></a><br>

        <ul style="list-style-type:circle">
          <li>This program implements localized help information for users, along with a help window and about page.
          </li>
        </ul>
        </center>
        </td>
      </tr> 
    </table>
    </center>
   
  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
