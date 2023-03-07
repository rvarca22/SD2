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
        <title> Products of Book Buyers </title>
        <meta charset = 'utf-8'>
    </head>

    <body style = "background-color:#FCFFDB">
        <header> 
            <h1> Our Products </h1>
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

    $q = "SELECT * FROM team7_products WHERE record_active = 'Y' " . $sort_type;   #command goes in $q
    $r = mysqli_query($dbc,$q); 

     echo "<table border = '2'>";

    if($_SESSION['login_status'] == 'LOGGED IN'){
        if($r) {
            echo "<tr";
            echo "<th>  </th>";
            echo "<th> Product ID </th>";
            echo "<th> Title  </th>";
            echo "<th> Publication Date </th>";
            echo "<th> Price  </th>";
            echo "<th> Quantity </th>";
            echo "<th> Delete Product </th>";
            echo "<tr>";
            while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                echo "<tr>";
                echo "<td>"     . $row[0] . "</td><td>" . $row[2] . 
                    "</td><td>" . $row[3] . "</td><td>" . $row[4] . 
                    "</td><td>" . $row[6] . "<td> <a href = 'ProductsSetActive.php?id=$row[0]&active=N' > DELETE </a></td>";
                echo "</tr>";
            }
        }
        else{
            echo "<li>" . mysqli_error($dbc) . "</li>";
        }
    }
    else{
        if($r){
            echo "<tr";
            echo "<th>  </th>";
            echo "<th> Product ID </th>";
            echo "<th> Title  </th>";
            echo "<th> Publication Date </th>";
            echo "<th> Price  </th>";
            echo "<th> Quantity </th>";
            echo "<tr>";
            while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                echo "<tr>";
                echo "<td>"     . $row[0] . "</td><td>" . $row[2] . 
                    "</td><td>" . $row[3] . "</td><td>" . $row[4] . 
                    "</td><td>" . $row[6] . "</td>";
                echo "</tr>";
            }
        }

    }

    echo "</table>"; 

    if($_SESSION['login_status'] == 'LOGGED IN'){
    echo "<br> <a href = 'InsertNewProduct.php' > Add a book </a>";
    }

    
    echo "<form action = " . $_SERVER['SCRIPT_NAME'] . " method = 'POST'> ";
    echo " <br> <label for = 'sort' style = 'color:purple';> Sort the table by: </label>";
    echo "     <select name = 'sort' id = 'sort'> ";
    echo "         <option value = 'product_id' > Product ID </option>"; 
    echo "         <option value = 'title' > Title </option>"; 
    echo "         <option value = 'publication_date' > Publication Date </option>"; 
    echo "         <option value = 'stock_quant' > Quantity </option>"; 
    echo    "<br> <input style = 'background-color: blue; color: white'; type = 'submit' value = 'Go!'>";

    include "T7_footer.php";
?>
