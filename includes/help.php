<!-- ***********************************************************************************
  Page Name  : help.php
  Author     : Sydney Simmons
  Your URL   : ocelot-aul.fiu/~ssimm051
  Course     : CGS 4854 Spring 2023, Tue/Thur 3:30-4:45 
  Program #  : Program #4
  Purpose    : This page opens a new help window 

  Due Date   : 04/14/2023 

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

                     ..........{ Sydney Simmons }..........
 ******************************************************************************* -->


<!DOCTYPE html>              <!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->


<html>                       <!-- start of html (Hyper Text Markup Language) --> 

  <head>                     <!-- start of the head section -->
      
    <title>    
      help
    </title>  

    
  </head>                    <!-- end of the head section -->
   
   
  <body onload="help()">

    <script>
       
      function help()
      {
        // Open a new window at a specific location
        var myWindow = window.open("", "Help","width=500, height=700, scrollbars=yes,resizable=yes, left=70, top=70");    	
        
        // Display the purpose of each button on the form in the newly opened window 
        myWindow.document.write("<head>");
        myWindow.document.write("<title>Help</title>");
        myWindow.document.write("</head>");
        myWindow.document.write("<div>");
        myWindow.document.write("<div><h1 style='color:mediumVioletRed'>* HELP * </h1></div>");
        myWindow.document.write("<hr>");
        myWindow.document.write("<div> <h2><span style='color:mediumVioletRed'>Button Purpose</span></h2></div>");
        myWindow.document.write("<ul style='list-style-type:circle'>");
        myWindow.document.write("<li>\n <h3 style='color:mediumVioletRed'>SAVE</h3>");
        myWindow.document.write("<div>Use the Save button to add information on the database.The information will be stored in the table, and a message will appear stating <span style='color:maroon'>RECORD ADDED</span>. Otherwise, if the information has previously been entered, a message will appear, stating <span style='color:maroon'>RECORD ALREADY EXISTS.</span></div><br></li>");
        myWindow.document.write("<div>");
        //myWindow.document.write("<ul style='list-style-type:circle'>");
        myWindow.document.write("<li>\n <h3 style='color:mediumVioletRed'>FIND</h3>");
        myWindow.document.write("<div>Use to find a record enter the Telephone number and press the FIND button,then pass the telphone (primary key), using POST, to the table.</div><br></li>");
        myWindow.document.write("<div>If the record is found, the fields on the Data page will be filled with information about the user, and a message will appear, stating <span style='color:maroon'>RECORD FOUND</span>. Otherwise, a message will appear stating <span style='color:maroon'>RECORD NOT FOUND.</span></div>"); 
        //myWindow.document.write("<br>");
        myWindow.document.write("<li>\n <h3 style='color:mediumVioletRed'>MODIFY</h3>");
        myWindow.document.write("<div>Use the Modify button to edit existing record on the table. to do that the telephone must be found first, then the data can be changed.</div><br></li>");
        myWindow.document.write("<div>To modify a user info, follow these steps:</div>");
        myWindow.document.write("<ol class='popup-list' type='1'>");
        myWindow.document.write("<li>Enter the user Telephone number that you want update.</li>");
        myWindow.document.write("<li>Then, press the <b>Find button</b> to search for the record .</li>");
        myWindow.document.write("<li>Next, change the data you want update</li>");
        myWindow.document.write("<li>Finally, press the <b>Modify button </b> to store the modified information.</li>");
        myWindow.document.write("</ol>");
    
        // myWindow.document.write("<br>");
        myWindow.document.write("<li><h3 style='color:mediumVioletRed'>DELETE</h3>");
        myWindow.document.write("<div>Use the Delete button to delete existing telephone . To do that, the telephone must be found, then the data can be deleted from the database.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:mediumVioletRed'>CLEAR</h3>");
        myWindow.document.write("<div>Use the clear button to clear the data from the fields on the Data page.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:mediumVioletRed'>CONTACT ME</h3>");
        myWindow.document.write("<div> Use the Contact Me button to be redirect to a new page that will allow you to input your information and a message that will be sent to me.</div><br></li>");
        myWindow.document.write("<li><h3 style='color:mediumVioletRed'>HELP</h3>");
        myWindow.document.write("<div> Press the Help button to discover the purpose and functionality of the buttons and using JavaScript</div><br></li>");
        myWindow.document.write("<li><h3 style='color:mediumVioletRed'>ABOUT</h3>");
        myWindow.document.write("<div> The About button leads you to the about page, this page provides details about the contents on this website</div><br></li>");
        myWindow.document.write("</ul>");
        myWindow.document.write("</div>");
        
      }
      
    </script>
   
  </body>                    <!-- close of the body section -->
  
</html>                      <!-- close of html (Hyper Text Markup Language) -->  
