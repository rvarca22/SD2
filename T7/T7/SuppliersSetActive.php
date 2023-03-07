<!DOCTYPE html> 
<!--    UsersSetActive - sets active column in team7_users table --> 


    <body style = "background-color:#FCFFDB">
        <header> 
            <h1> Supplier Deleted </h1>
        </header>
    </body> 


<?php
    include "ErrorHandler.php";
    include "connect_db.php";
    define("FILE_AUTHOR", "Varca");
    echo "<br> <a href = 'T7_Supplier_Table.php' > Back </a> <br>";


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
    $q = "UPDATE team7_suppliers SET record_active = '" . $active . "' 
            WHERE supplier_id = $id"; 
    $r = mysqli_query($dbc, $q); 
    
    if($r) {
        echo "<br> The active field for Record $id was changed to $active (inactive)";
    }
    else {
        echo "<br>" . mysqli_error($dbc);
    }

    include "T7_footer.php";


#EOF 
