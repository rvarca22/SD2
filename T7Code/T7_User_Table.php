<!DOCTYPE html>

<style>
    th{ color:purple; }
    h1{ color:purple;}
    tr:nth-child(even) {background-color: #CBC3E3;}
    td, td {padding: 5px}; 
</style>
	
	<!--<input type="button" value="Go back!" onclick="history.back()">-->
	
<?php
    define("FILE_AUTHOR", "Varca");
    //echo "<a href = 'Team7.php' > Back </a>";
    include "Team7_Header.php";

?>
    <html lang = "en">
    <head>
        <title> Users of Book Buyers </title>
        <meta charset = 'utf-8'>
    </head>

    <body style = "background-color:#FCFFDB">
        <header> 
            <h1> Our Users </h1>
        </header>
    </body> 
    

    <main> 
<?php
    if(isset($_POST['sort'])){ #has this variable been set?
        $sort_type = " ORDER BY " . $_POST['sort'];
    }
    else{
        $sort_type = " ";
    }
    $dbc = mysqli_connect('localhost', 'mike',
                            'easysteps', 'site_db');

    $q = "SELECT * FROM team7_users WHERE record_active = 'Y' " . $sort_type;   #command goes in $q
    $r = mysqli_query($dbc,$q); 

     echo "<table border = '2'>";

    if($r) {
        echo "<tr>";
        //echo "<th>  </th>";
        echo "<th> ID Number </th>";
        echo "<th> Username  </th>";
        echo "<th> First Name  </th>";
        echo "<th> Position  </th>";
        echo "<th> Email Address </th>";
        echo "<th> Delete User </th>";
        echo "<tr>";
        while($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
            echo "<tr>";
            echo "<td>"     . $row[0] . "</td><td>" . $row[4] . 
                "</td><td>" . $row[7] . "</td><td>" . $row[8] . 
                "</td><td>" . $row[9] . "<td> <a href = 'UsersSetActive.php?id=$row[0]&active=N' > DELETE </a></td>";
            echo "</tr>";
        }
    }
    else{
        echo "<li>" . mysqli_error($dbc) . "</li>";
    }
    echo "</table>";  
    
    echo "<br> <a href = 'InsertNewUser.php' > Add a user </a>";

    echo "<form action = 'T7_User_Table.php' method = 'POST'> ";


    echo " <br> <label for = 'sort' style = 'color:purple';> Sort the table by: </label>";
    echo "     <select name = 'sort' id = 'sort'> ";
    echo "         <option value = 'login_id' > ID Num </option>"; 
    echo "         <option value = 'username' > Username </option>"; 
    echo "         <option value = 'first_name' > First Name </option>"; 
    echo "         <option value = 'level' > Position </option>"; 
    echo "         <option value = 'email' > Email Address </option>"; 
    echo    "<br> <input style = 'background-color: blue; color: white'; type = 'submit' value = 'Go!'>";

    include "T7_footer.php";
?>
