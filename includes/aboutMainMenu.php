<!-- ***********************************************************************************
  Page Name  : aboutMainMenu.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #4
  Purpose    : This page implements the dropdown menu with ul(s) and li(s). This page also sets up the colors and sizes of the main menu 

  Due Date   : 4/14/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->

<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      about Main Menu
    </title>  
    
    <style type="text/css"> /* allows css language */ 
      
      body 
      {
        background-color: Seashell; 
      }
      /* sets up dropdown menu */
      nav ul ul
        {
          display: none;   /* hides sub menus */
        }

        nav ul li:hover > ul
        {
          display: block;  /* shows sub menus when hovered over */
        }

        nav ul       /* sets up colors of the blocks */
        {
          background: mistyRose;
          background: linear-gradient(top, seashell 20%, mistyRose 100%);
          background: -moz-linear-gradient(top, mistyRose 60%, seashell 100%);
          background: -webkit-linear-gradient(top, seashell 30%, mistyRose 100%);
          box-shadow: 0px 0px 3px rgba(0,0,0,0.20);
          padding: 0 60px;
          border-radius: 15px;
          list-style: none;
          position: relative;
          display: inline-table;
        }

        nav ul:after
        {
          content: ""; clear: both; display: block;
        }

        nav ul li   /* makes the li(s) float left (horizontally) */
        {
          float: left;
        }

        nav ul li:hover  /* color of blocks when hovered over */
        {
          background: mistyRose;
          background: linear-gradient(top, seashell 20%, mistyRose 40%);
          background: -moz-linear-gradient(top, seashell 60%, mistyRose 200%);
          background: -webkit-linear-gradient(top, seashell 30%, mistyRose 70%);
        }

        nav ul li:hover a  /*sets color of text when hovered over */
        {
          color: maroon;
        }

        nav ul li a /* sets inital color of text */
        {
          display: block; padding: 20px 60px;
          color: maroon; text-decoration: none;
        }

        /* setting for the sub menus */ 
        nav ul ul
        {
          background: Seashell; border-radius: 9px; padding: 1; /* sets size of the dropdown blocks */
          position: absolute; top: 100%;
        }

        nav ul ul li 
        {
          float: none;
          border-top: 1px solid maroon;   /* color and size of the line borders */
          border-bottom: 1px solid maroon;
          position: relative;
        }

        nav ul ul li a
        {
          padding: 15px 40px;
          color: #CCCCFF;
        }

        nav ul ul li a:hover
        {
          background: mistyrose;  /* color of blocks when hovered over */ 
        }

        nav ul ul ul
        {
          position: absolute; left: 100%; top:0;
        }

    </style>  <!-- end of css and style tag -->

  </head>                    <!-- end of the head section -->
   
   
  <body>                     <!-- start of the body section -->
    
    <!-- main menu nav set up -->
    <nav align="center">  
      <ul> 
        <li><a href="../index.html">Home</a></li> &nbsp;&nbsp; 
        <li><a href="pgm1.html">Program 1</a> &nbsp;&nbsp; 
          <ul>
            <li><a href="Page1.html">Page 1</a></li>
            <li><a href="Page2.html">Page 2</a></li>
            <li><a href="Page3.html">Page 3</a></li>
            <li><a href="Page4.html">Page 4</a></li> 
            <li><a href="../index.html">Home</a></li>
          </ul>
        </li>
        <li><a href="program2.php">Program 2</a></li> 
        <li><a href="program3.php">Program 3</a></li>
        <li><a href="program4.php">Program 4</a></li>
      </ul>
    </nav>

  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) --> 
