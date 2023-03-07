<!DOCTYPE html>
<!-- Functional login page for Book Buyer Website-->
<head>
<title> Login to Book Buyer! </title>
<meta charset = "utf-8">
</head>

<body style = "background-color: #FCFFDB">
<!-- Header with nav buttons that follow you to every page outside of the homepage -->
		<style>
			#textbutton{
			 
			background: none; 
			border: none; 
			color: purple;
			cursor: pointer;
			
			}
			
			.text-center{
				text-align: center;
			}
			
			.container > div {
			display: inline-block;
			display: -moz-inline-box;
			*display: inline; /* For IE7 */
			zoom: 1; /* Trigger hasLayout */
			width: 24.7%;
			text-align: center;
			}
			
		</style>

<!--Header with nav buttons start here -->


    <?php

	
	?>

	<center><img src = "bookBuyerLogo.png" width = "240" height ="100"  title= 'Back to Homepage' id = "logo"> </center> 
		


	

	

	<!-- This is where the navigation button start -->
	<div class = "container">
	<div><h2><a href = "T7/Team7.php">  Homepage </a> </div>    
	<div><h2 style = "color: purple"> Buy/Rent Books </h2> </div>
    <!--<div><h2><a href = "Version_Log.php" > Version Log </a> </div>-->
    <!--<div><h2><a href = "Disclaimer.php" > Disclaimer </a> </div>-->
    <!--<div><h2><a href = "admin_page.php"> Admin Page </a> </div>-->
    <!--<div><h2><a  href = "T7_User_Table.php"> Our Users </a>   </div>-->
    <div><h2><a href = "T7/T7_Supplier_Table.php"> Our Suppliers </a> </div>
    <div><h2><a  href = "T7/T7_Product_Table.php"> Our Products </a>   </div>
    </div>
    <!-- This is where the naviagtion buttons end -->
	
	
	<hr>
	<!-- Header wtih nav buttons end here -->


<?php
//require "T7/Team7_Header.php";
session_start();
// 11-10-21 Marcus Vescio
include "errorhandler.php";
//require "connect_db";
$error_message = "";
        if (isset($_POST['user_name'])) {
            $user_name = $_POST['user_name'];
        }
        else {
            $user_name = "";
        }
        if (isset($_POST['user_password'])) {
            $user_password = $_POST['user_password'];
        }
        else {
            $user_password = "";
        }

        if (isset($_SESSION['login_status'])) {
            $login_status = $_SESSION['login_status'];
        }
        else {
            $login_status = "NOT LOGGED IN";
        }
        if (isset($_SESSION['admin_status'])) {
            $admin_status = $_SESSION['admin_status'];
        }
        else {
            $admin_status = FALSE ;
        }
echo "<h2> Login to BookBuyer  </h2>";
define("FILE_AUTHOR", 'Vescio');  
        require "connect_db.php";
        //echo "Login to Book Buyer!";
        //Input Validation
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $error_message == "Enter a username and password!";
        }
        else if(trim($user_name) == "")
        {
            $error_message = "Please enter a user name!";
        }
        else if (ctype_alnum($user_name) == FALSE)
        {
            $error_message = "Invalid character in username!";
        }
        else if (trim($user_password) == "")
        {
            $error_message = "Please enter a password!";
        }
        else if (ctype_alnum($user_password) == FALSE)
        {
            $error_message = "Invalid character in password!";
        }
        else if ($error_message == "") {
            $q = "SELECT * FROM team7_users WHERE username='$user_name'
            AND password='$user_password'";
            $r = mysqli_query ( $dbc , $q ); # this runs commands,
            if ($r){
                if (mysqli_num_rows($r) == 0) {
                    $error_message = "Invalid user name/password combination.";
                }
            }
            else {
                $error_message = "Invalid user name/password combination.";
                }
        }
    
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "<form action='" . $_SERVER['SCRIPT_NAME'] . "' method ='POST'>";
        echo "<br>";
        echo "<br>Enter your username <input type = 'text' name='user_name'>";
        echo "<br>Enter your password <input type = 'password' name='user_password'>";
        echo "<br><br> <input style='color:white;background-color:blue' type = 'submit' value = 'Submit' >";
        echo "</form>";
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' & $error_message == "") {
            echo "<br><br>User <b>$user_name</b> succesfully logged in as an ";
            $_SESSION["login_status"] = "LOGGED IN";
        
            if($_SESSION['login_status'] == "LOGGED IN"){
                $q = "SELECT level FROM team7_users WHERE username='$user_name'
                    AND password='$user_password'";
                $r = mysqli_query ( $dbc , $q );
                while ($row = mysqli_fetch_array($r)){
                    echo $row['level'];
					if ($row['level'] == "Admin"){
						$_SESSION['admin_status'] = TRUE;
					}
                }
            }
        }

        echo "<p style='color:red;'> " . $error_message . "</p>";
        echo "<br><a href= 'login.php'> Reload page</a>";
       /* if($_SESSION["login_status"] = "LOGGED IN")
        {
            session_destroy();
            $_SESSION["login_status"] = "LOGGED OUT";
            die; }
		*/

        echo "<br><a href= 'T7/Team7.php'> Back to Homepage</a>";
     include "footer.php";
	 
?>
</body>
</html>