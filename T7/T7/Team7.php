<!DOCTYPE html>
<!--    Team7.html       Working home page for Book Buyers site
    09/26/2021 JLT,RV,MV Original Program   -->

    <?php
        define("FILE_AUTHOR", "Thermos, Varca, Vescio");
    ?>
    <html lang = "en">
        
    <head>
		<title> Welcome to Book Buyer! </title>
        <style> 
            body{background-color: white}
            
			header{color: purple; font-size: 25px;}
            
			h3{ text-align: left; padding-left: 50px;}
			
			.container > div {
			display: inline-block;
			display: -moz-inline-box;
			*display: inline; /* For IE7 */
			zoom: 1; /* Trigger hasLayout */
			width: 24.7%;
			text-align: center;
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
	<body style = "background-color:#FCFFDB">
	
	
	
	
	<!-- HEADER STARTS HERE-->
	<center><img src = "bookBuyerLogo.png" width = "240" height ="100"  title= "Back to Homepage" id = "logo"> </center> 
	

	<!-- This is where the navigation button start -->
	<div class = "container">
    <div><h2><a href = "Team7.php">  Homepage </a> </div>
	<div><h2> <a href = "Buyrent.php"> Buy/Rent Books </a></h2> </div>
    <!--<div><h2><a href = "Version_Log.php" > Version Log </a> </div>-->
    <!--<div><h2><a href = "Disclaimer.php" > Disclaimer </a> </div>-->
    <!--<div><h2><a href = "admin_page.php"> Admin Page </a> </div>-->
    <!--<div><h2><a  href = "T7_User_Table.php"> Our Users </a>   </div>-->
    <div><h2><a href = "T7_Supplier_Table.php"> Our Suppliers </a> </div>
    <div><h2><a  href = "T7_Product_Table.php"> Our Products </a>   </div>
    </div>
    <!-- This is where the naviagtion buttons end -->
	
	
	<hr>
	<!-- HEADER WITH NAV BUTTONS END HERE -->
     
	 
	 
	 <header style =  "text-align: center"> Welcome to the Book Buyer home page!</header> 
            <p style = "text-align: center"><b>The Book Buyer Company is a book vending enterprise where customers
            can buy and rent new and used books from locations and companies 
            around and throughout.</b>
			
			
			<!-- Featured books-->
			<h3 style = "color: purple; text-align: center;"> HERE ARE TODAY'S FEATURED BOOKS: </h3>
        <p> 

        
			<div class = "img_container">
            <div><img src = "catcher.jpg" width = "200" height ="300"></div>
			<div><img src = "hamlet.jpg" width = "200" height = "300"></div>
			<div><img src = "tokillabird.jpg" width = "200" height = "300"></div>
			</div>
			

           
            
            <br>
			

        </main>

    <?php
        include "T7_footer.php";
    ?>

    </body>

    </html>