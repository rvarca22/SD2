<?php
session_start();
define("FILE_AUTHOR", "Vescio");
// logout
include "errorhandler.php";
//require "connect_db";
       if($_SESSION["login_status"] = "LOGGED IN")
        {
            $_SESSION["login_status"] = "NOT LOGGED IN";
            $_SESSION["admin_status"] = FALSE; 
            session_destroy();
        }
		//Automatically redirects back to homepage while logging the user out
		header("Location: T7/Team7.php");
		exit();
        
		
		
		
		
		//echo "<br><a href= 'T7/Team7.php'> Logged out! Back to Homepage</a>";
     //include "T7/T7_footer.php";