<!DOCTYPE html> 
<!--    UsersSetActive - sets active column in team7_users table --> 


    <body style = "background-color:#FCFFDB">
        <header> 
            <h1> User Deleted </h1>
        </header>
    </body> 


<?php
    include "ErrorHandler.php";
    define("FILE_AUTHOR", "Varca");
    echo "<br> <a href = 'T7_User_Table.php' > Back </a> <br>";


    #superglobal $_GET = array of returned values(?)
    if(isset($_GET["id"])){  
        $id = $_GET["id"];
    }
    else{
        echo "No ID specified";
        die; 
    }

    if(isset($_GET["active"])){ 
        $active = $_GET["active"];
    }
    else{
        echo "No active value specified";
        die; 
    }

    
    require "../connect_db.php";
    $q = "UPDATE team7_users SET record_active = '" . $active . "' 
            WHERE login_id = $id"; 
    $r = mysqli_query($dbc, $q); 
    
    if($r) {
        echo "<br> The active field for Record $id was changed to $active (inactive)";
    }
    else {
        echo "<br>" . mysqli_error($dbc);
    }

    include "T7_footer.php";


#EOF 
