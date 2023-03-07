<!DOCTYPE html> 
<!--    11a- Varca.php
    11/07/2021 RV Original Program
--> 

    <html lang = "en">

    <head>
        <title> My First Form </title>
        <meta charset = 'utf-8'>
    </head>

    <body style = "background-color:#FCFFDB">
        <header> 
            <h1> Insert a new User </h1>
            <h3> This page will add a new user to our user table </h3>

        </header>
    <hr> <br>

    <main>

<?php
    include "ErrorHandler.php";
    include "../connect_db.php";
    define("FILE_AUTHOR", "Varca");
    echo "<br> <a href = 'T7_User_Table.php' > Back </a> <br>";

    $error_message = "";
    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    else {
        $id = "";
    }

    if(isset($_POST['user_name'])){
        $username = $_POST['user_name'];
    }
    else{
        $username = "";
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }
    else{
        $password = "";
    }
    if(isset($_POST['first_name'])){
        $firstname = $_POST['first_name'];
    }
    else{
        $firstname = "";
    }
    if(isset($_POST['level'])){
        $level = $_POST['level'];
    }
    else{
        $level = "";
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    else{
        $email = "";
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
    }
    else{
        $address = "";
    }

    #---------------------Input Validation------------------
    if(trim($id) == ""){
        $error_message = "Please enter an id";
    }
    else if (ctype_alpha($id) == TRUE){         #ID can only be a number 
        $error_message = "Invalid characters in ID";
    }
    else if(trim($username) == ""){
        $error_message = "Please enter a username";
    }
    else if(ctype_digit($username) == TRUE){    #Username cannot contain numbers
        $error_message = "Invalid characters in Username";
    }
    else if(trim($password) == ""){
        $error_message = "Please enter a password";
    }
    else if(trim($firstname) == ""){            
        $error_message = "Please enter a firstname";
    }
    else if(ctype_digit($firstname) == TRUE){   #First names cannot have numbers
        $error_message = "Invalid characters in first name";
    }
    else if(trim($email) == ""){
        $error_message = "Please enter an email";
    }
    else if(trim($address) == ""){
        $error_message = "Please enter an address";
    }

    echo "<p style = 'color:red;' > " . $error_message . "</p>";


    #---------------------Display a form to get input (Action)-----------------
    if($_SERVER['REQUEST_METHOD'] == 'GET' || $error_message != ""){
        echo "<form action = ' " . $_SERVER['SCRIPT_NAME'] . " ' method = 'POST' > ";
        echo " Enter user login id <input type = 'text' name = 'id' value = $id>";
        echo " <br> Enter a username <input type = 'text' name = 'user_name' value = $username>";
        echo " <br> Enter a password <input type = 'text' name = 'password' value = $password>";
        echo " <br> Enter user's first name <input type = 'text' name = 'first_name' value = $firstname>";
        echo " <br> <label for = 'level'> Enter user's level </label>";
        echo "     <select name = 'level' id = 'level'> ";
        echo "         <option value = 'Admin'> Admin </option>"; 
        echo "         <option value = 'Employee'> Employee </option>"; 
        echo "     </select>";
        echo " <br> Enter user's email <input type = 'text' name = 'email' value = $email>";
        echo " <br> Enter user's address <input type = 'text' name = 'address' value = $address>";
        echo    "<br> <input style = 'background-color: blue; color: white'; type = 'submit' value = 'Submit!'>";
    }
    else{
        $q = "INSERT INTO team7_users VALUES ('$id', 'Y', CURDATE(), 'Ryan', '$username', '$password', CURDATE(), '$firstname', '$level', '$email', '$address', 'None');";
        $r = mysqli_query($dbc, $q);

        if($r){
           
            echo "<br> User has been added";
        }
        else{
            echo "<br>" . mysqli_error($dbc);
        }
    }

    include "T7_footer.php";
?>