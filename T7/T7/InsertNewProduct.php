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
            <h1> Insert a new Product </h1>
            <h3> This page will add a new book to our products table </h3>

        </header>
    <hr> <br>

    <main>

<?php
    include "ErrorHandler.php";
    include "../connect_db.php";
    define("FILE_AUTHOR", "Varca");
    echo "<br> <a href = 'T7_Product_Table.php' > Back </a> <br>";

    $error_message = "";
    if (isset($_POST['id'])){
        $id = $_POST['id'];
    }
    else {
        $id = "";
    }

    if(isset($_POST['title'])){
        $title = $_POST['title'];
    }
    else{
        $title = "";
    }
    if(isset($_POST['pub_date'])){
        $pub_date = $_POST['pub_date'];
    }
    else{
        $pub_date = "";
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }
    else{
        $price = "";
    }
    if(isset($_POST['author'])){
        $author = $_POST['author'];
    }
    else{
        $author = "";
    }
    if(isset($_POST['ser_num'])){
        $ser_num = $_POST['ser_num'];
    }
    else{
        $ser_num = "";
    }
    if(isset($_POST['supplier'])){
        $supplier = $_POST['supplier'];
    }
    else{
        $supplier = "";
    }

    #-----------------Input Validation-----------------

    if(trim($id) == ""){
        $error_message = "Please enter an id";
    }
    else if (ctype_alpha($id) == TRUE){
        $error_message = "Invalid characters in ID";
    }
    else if(trim($title) == ""){
        $error_message = "Please enter a title";
    }
    else if(trim($pub_date) == ""){
        $error_message = "Please enter the publication date";
    }
    else if(trim($price) == ""){
        $error_message = "Please enter the price";
    }
    else if(trim($author) == ""){
        $error_message = "Please enter the author's name";
    }
    else if(trim($ser_num) == ""){
        $error_message = "Please enter the serial number";
    }
    else if(trim($supplier) == ""){
        $error_message = "Please enter the product's supplier";
    }

    echo "<p style = 'color:red;' > " . $error_message . "</p>";




    #----------------------- Display a form to get input (Action) -----------------------

    if($_SERVER['REQUEST_METHOD'] == 'GET' || $error_message != ""){
        echo "<form action = ' " . $_SERVER['SCRIPT_NAME'] . " ' method = 'POST' > ";
        echo " Enter book id <input type = 'text' name = 'id' value = $id>";
        echo " <br> Enter book title <input type = 'text' name = 'title' value = $title>";
        echo " <br> Enter publication date <input type = 'text' name = 'pub_date' value = $pub_date>";
        echo " <br> Enter book price <input type = 'text' name = 'price' value = $price>";
        echo " <br> Enter book's author <input type = 'text' name = 'author' value = $author>";
        echo " <br> Enter book's serial number <input type = 'text' name = 'ser_num' value = $ser_num>";
        echo " <br> Enter book supplier <input type = 'text' name = 'supplier' value = $supplier>";
        echo    "<br> <input style = 'background-color: blue; color: white'; type = 'submit' value = 'Submit!'>";
    }
    else{
        $q = "INSERT INTO team7_products VALUES ('$id', 'Y', '$title', '$pub_date', '$price', '$author', 50, 200, '$ser_num', '$supplier')";
        $r = mysqli_query($dbc, $q);

        if($r){
           
            echo "<br> Book has been added";
        }
        else{
            echo "<br>" . mysqli_error($dbc);
        }
    }

    include "T7_footer.php";
?>