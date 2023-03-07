<!DOCTYPE html>
<!--    Team7.html       Working home page for Book Buyers site
    09/26/2021 JLT,RV,MV Original Program   -->

    <?php
		define(FILE_AUTHOR, "Varca");
	?>
    <html lang = "en">
        
    <head>
		<title> Welcome to Book Buyer! </title>
        <style> 
            body{background-color: green}
            
			header{color: purple; font-size: 25px;}
            
			h3{ text-align: left; padding-left: 50px;}

			h2{padding-bottom: 200px}
			
			.container > div {
			display: inline-block;
			display: -moz-inline-box;
			*display: inline; /* For IE7 */
			zoom: 1; /* Trigger hasLayout */
			width: 47%; /* 24.7*/
			/* text-align: center; */
			}
			
			#textbutton{
			background: none; 
			border: none; 
			color: purple;
			cursor: pointer;
			}
			
			.text-center{
				text-align: center;
			}
			
			
			
			.img_container > div {
			display: inline-block;
			display: -moz-inline-box;
			*display: inline; /* For IE7 */
			zoom: 1; /* Trigger hasLayout */
			width: 33%;
			text-align: center;
			}
			
			
			
        </style>
    </head>
	<body style = "background-color: green">
	
	
	
	
	<!-- HEADER STARTS HERE-->
	<center><img src = "bookBuyerLogo.png" width = 1550" height ="600"  title= "Back to Homepage" id = "logo"> </center> 
	
	<br><h1 style = "text-align: center; color: red"> THANKS FOR VISITING! </h1>

	<!-- This is where the navigation button start -->
	<?php
		echo "<br> <p style = 'text-align: center;'> <a href = 'Version_Log.php' > Version Log (1.3)</a>";
		echo "&nbsp <a href = 'Disclaimer.php'> Disclaimer </a> <br><br><br><br><br><br>";
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			 <a href = 'Admin_Page.php'> Admin Page </a> <br><br><br>";
		echo "<BR> Email <a href = 'mailto: ryan.varca1@marist.edu'> Book Buyer Team </a>"; 
		echo "<br><br><br>";
		echo "<h2> <br><a href= '../login.php'> Login</a>";
		echo "<br><a href= '../logout.php'> Log Out</a>";

	?>
	<div class = "container">
		<div><h2><a href = "Team7.php">  Homepage </a> <br><br><br><br><br></div>
		<div><h2> <a href = "Buyrent.php"> Buy/Rent Books </a> </h2> </div>
		<!--<div><h2><a href = "Version_Log.php" > Version Log </a> </div>-->
		<!--<div><h2><a href = "Disclaimer.php" > Disclaimer </a> </div>-->
		<!--<div><h2><a href = "admin_page.php"> Admin Page </a> </div>-->
		<!--<div><h2><a  href = "T7_User_Table.php"> Our Users </a>   </div>-->
		<div><h2><a href = "T7_Supplier_Table.php"> Our Suppliers </a> <br><br><br><br><br> </div>
		<div><h2><a  href = "T7_Product_Table.php"> Our Products </a>   </div>
	</div>
    <!-- This is where the naviagtion buttons end -->
	
	
	<hr>
	<!-- HEADER WITH NAV BUTTONS END HERE -->
     
	 
	 
	 <header style =  "text-align: center"> Welcome to the Book Buyer home page!<br><br><br><br><br><br><br><br><br><br></header> 
            <p style = "text-align: center"><b>The Book Buyer Company is a book vending enterprise where customers
            can buy and rent new and used books from locations and companies 
            around and throughout. </b> 
			
			
			<!-- Featured books-->
			<h3 style = "color: purple; text-align: center;"> HERE ARE TODAY'S FEATURED BOOKS: <br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>	</h3>
        <p> 

        
			<div class = "img_container">
            <div><img src = "catcher.jpg" width = "200" height ="300"></div>
			<div><img src = "hamlet.jpg" width = "300" height = "450"></div>
			<div><img src = "tokillabird.jpg" width = "400" height = "600"></div>
			</div>
			

           
            
            <br>
			

        </main>

    <?php
		echo "<hr> ";
		echo "<p style = 'text-align: center;'> <small> (c) " . FILE_AUTHOR . ", 2021 </small>";
	?>
	
    </body>

    </html>