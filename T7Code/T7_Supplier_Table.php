<!DOCTYPE html>

<style>
    th{ color:purple; }
    h1{ color:purple;}
</style>
	
	<!--<input type="button" value="Go back!" onclick="history.back()">-->
	
<?php
    session_start();
    define("FILE_AUTHOR", "Vescio, Varca, Thermos");
    //echo "<a href = 'Team7.php' > Back </a>";
    include "Team7_Header.php";
?>
    <html lang = "en">
    <head>
        <title> Suppliers of Book Buyers </title>
        <meta charset = 'utf-8'>
    </head>

    <body style = "background-color: #FCFFDB">
        <header> 
            <h1> Our Suppliers </h1>
        </header>
    </body>
    
    <style>
        tr:nth-child(even) {background-color: #CBC3E3;}
        td, td {padding: 5px}; 
    </style>

    <main> 
<?php

    if(isset($_POST['sort'])){ #has this variable been set?
        $sort_type = " ORDER BY " . $_POST['sort'];
    }
    else{
        $sort_type = "";
    }

    
    $dbc = mysqli_connect('localhost', 'mike',
                            'easysteps', 'site_db');
    $q = "SELECT * FROM team7_suppliers WHERE record_active = 'Y' " . $sort_type;   #command goes in $q
    $r = mysqli_query($dbc,$q); 

    if($_SESSION['login_status'] == 'LOGGED IN'){
        if($r) {
            echo "<table border = '2'>";
            echo "<tr";
            echo "<th>  </th>";
            echo "<th> Supplier ID </th>";
            echo "<th> Name </th>";
            echo "<th> City  </th>";
            echo "<th> Phone Number </th>";
            echo "<th> Delete Supplier </th>"; #Anyone logged in is allowed to delete a supplier
            echo "<tr>";
            while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                echo "<tr>";
                echo "<td>"     . $row[0] . "</td><td>" . $row[2] . 
                    "</td><td>" . $row[3] . "</td><td>" . $row[5] . 
                    "</td> <td> <a href = 'SuppliersSetActive.php?id=$row[0]&active=N' > DELETE </a></td>";
                echo "</tr>";
            }
        }
        else{
            echo "<li>" . mysqli_error($dbc) . "</li>";
        }
     }
    else{ #If user is NOT logged in -- can't see options for adding/deleting suppliers
        if($r){
            echo "<table border = '2'>";
            echo "<tr>";
            //echo "<th>  </th>";
            echo "<th> Supplier ID </th>";
            echo "<th> Name </th>";
            echo "<th> City  </th>";
            echo "<th> Phone Number </th>";
            echo "<tr>";
            while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                echo "<tr>";
                echo "<td>"     . $row[0] . "</td><td>" . $row[2] . 
                    "</td><td>" . $row[3] . "</td><td>" . $row[5] . 
                    "</td>";
                echo "</tr>";
            }
        }
    }
    echo "</table>";
    
    if($_SESSION['login_status'] == 'LOGGED IN'){
    echo "<br> <a href = 'InsertNewSupplier.php' > Add a Supplier </a>";
    }


    echo "<form action = " . $_SERVER['SCRIPT_NAME'] . " method = 'POST'> ";
    echo " <br> <label for = 'sort' style = 'color:purple';> Sort the table by: </label>";
    echo "     <select name = 'sort' id = 'sort'> ";
    echo "         <option value = 'supplier_id' > Supplier ID </option>"; 
    echo "         <option value = 'supplier_name' > Name </option>"; 
    echo "         <option value = 'city' > City </option>"; 
    echo "         <option value = 'phone_num' > Phone Number </option>"; 
    echo    "<br> <input style = 'background-color: blue; color: white'; type = 'submit' value = 'Go!'>";

    include "T7_footer.php";
?>
