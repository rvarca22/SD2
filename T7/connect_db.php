<!- Filename: connect_db 
    This file connects to our database using default MIKE@LOCALHOST
	MySQL server MUST be running!  
    Important: This file has our password so it must NOT be visible to users!
    Note: if mysli function not found - reload MAMP 
	Set the variable $display_messages to FALSE once you know your connection is good
	
	V1.0  10/11/2021 AT Original program                                  ->

<?php
  
  $display_messages = TRUE;              
 
  if ($display_messages) {
      //Echo "<br> ";
  } 
  
  $dbc=mysqli_connect('127.0.0.1','mike','easysteps','site_db')
  OR die
      (   mysqli_connect_error());;
	  
  if ($display_messages) { 	  
       //Echo "<br>  <br>"; 
  }  	   
         
## EOF 
