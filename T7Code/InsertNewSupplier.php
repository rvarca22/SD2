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
            <h1> Insert a new Supplier </h1>
            <h3> This page will add a new supplier to our suppliers table </h3>

        </header>
    <hr> <br>

    <main>

<?php
    include "ErrorHandler.php";
    include "../connect_db.php";
    define("FILE_AUTHOR", "Varca");
    echo "<br> <a href = 'T7_Supplier_Table.php' > Back </a> <br>";


    #---------- Initialize some variables -----------

    $error_message = "";
    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    else {
        $id = "";
    }

    if(isset($_POST['supplier_name'])){
        $supplier_name = $_POST['supplier_name'];
    }
    else{
        $supplier_name = "";
    }
    if(isset($_POST['address'])){
        $address = $_POST['address'];
    }
    else{
        $address = "";
    }
    if(isset($_POST['city'])){
        $city = $_POST['city'];
    }
    else{
        $city = "";
    }
    if(isset($_POST['phone_num'])){
        $phone_num = $_POST['phone_num'];
    }
    else{
        $phone_num = "";
    }

    #--------------Input Validation-----------------------
    
    if(trim($id) == ""){
        $error_message = "Please enter an id";
    }
    else if (ctype_alpha($id) == TRUE){
        $error_message = "Invalid characters in ID";
    }
    else if(trim($supplier_name) == ""){
        $error_message = "Please enter the supplier's name";
    }
    else if(trim($address) == ""){
        $error_message = "Please enter the supplier's address";
    }
    else if(trim($city) == ""){
        $error_message = "Please enter the supplier's host city";
    }
    else if(trim($phone_num) == ""){
        $error_message = "Please enter the supplier's phone number";
    }
    else if (ctype_alpha($phone_num) == TRUE){
        $error_message = "Invalid characters in phone number";
    }

    echo "<p style = 'color:red;' > " . $error_message . "</p>";


    #---------------Verify with MYSQL---------------------

    if($error_message == ""){
        $q = "INSERT INTO team7_suppliers VALUES ('$id', 'Y', '$supplier_name', '$address', '$city', '$phone_num')";
        $r = mysqli_query($dbc, $q);
        if($r){
            
            echo "<br> Supplier has been added";
        }
        echo "<p style = 'color:red;' > " . $error_message . "</p>";
    }
    
    #----------------------- Display a form to get input (Action) -----------------------

    if($_SERVER['REQUEST_METHOD'] == 'GET' || $error_message != ""){
        echo "<form action = ' " . $_SERVER['SCRIPT_NAME'] . " ' method = 'POST' > ";
        echo " Enter supplier id <input type = 'text' name = 'id' value = $id >";
        echo " <br> Enter supplier's name <input type = 'text' name = 'supplier_name' value = $supplier_name>";
        echo " <br> Enter supplier's address <input type = 'text' name = 'address' value = $address>";
        echo " <br> Enter supplier's city <input type = 'text' name = 'city' value = $city>";
        echo " <br> Enter supplier's phone number <input type = 'text' name = 'phone_num' value = $phone_num>";
        echo    "<br> <input style = 'background-color: blue; color: white'; type = 'submit' value = 'Submit!'>";
    }

    include "T7_footer.php";


    function string_check($this_string){
        $this_string = str_replace(" ", "", $this_string); 
        if(ctype_alnum($this_string)){
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
?>