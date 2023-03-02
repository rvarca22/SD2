<!DOCTYPE html>

<html lang = "en">
<head> 
	<title> SQL Table Exlpanations </title>
	<meta charset = "utf-8">
</head> 
<body style = "background-color:#FCFFDB">




<?php

    echo "<a href = 'Admin_Page.php' > Back </a>";

    echo "<h2> T7 Database Tables </h2>";
    echo "<hr>";

    $dbc = mysqli_connect('localhost', 'mike',
                            'easysteps', 'site_db');


    $q = "EXPLAIN team7_products";
    $r = mysqli_query($dbc, $q); 

    echo "<table border = '2'>";

    echo "<h3 style = 'color: purple'; > team7_products </h3>";
    if($r){
        while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
            echo "<tr>";
            echo "<td>"     . $row[0] . "</td><td>" . $row[1] . 
                "</td><td>" . $row[2] . "</td><td>" . $row[3] . 
                "</td><td>" . $row[5]; 
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<br>";

    echo "<h3 style = 'color: purple'; > team7_suppliers </h3>";

    $q = "EXPLAIN team7_suppliers";
    $r = mysqli_query($dbc, $q); 

    echo "<table border = '2'>";
    
    if($r){
        while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
            echo "<tr>";
            echo "<td>"     . $row[0] . "</td><td>" . $row[1] . 
                "</td><td>" . $row[2] . "</td><td>" . $row[3];
            echo "</tr>";
        }
    }
    echo "</table>";


    echo "<h3 style = 'color: purple'; > team7_users </h3>";

    $q = "EXPLAIN team7_users";
    $r = mysqli_query($dbc, $q); 

    echo "<table border = '2'>";
    
    if($r){
        while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
            echo "<tr>";
            echo "<td>"     . $row[0] . "</td><td>" . $row[1] . 
                "</td><td>" . $row[2] . "</td><td>" . $row[3] . 
                "</td><td>" . $row[4] . "</td><td>" . $row[5];
            echo "</tr>";
        }
    }
    echo "</table>";


    include "T7_footer.php";


?>

</body>
</html>