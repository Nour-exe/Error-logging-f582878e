<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Choose a number between 1-10 <small></small></h1>
    

      
        <form action="my_error.php" method="post">
        <label for="number">Enter You're Choice: </label>
        <input type="number" name="choice" id="choice">
        <input type="submit" value="Submit">
    </form>
    </body>
</html>

<?php

session_start();



if (isset($_POST["choice"]) && $_POST["choice"] <= 3) {
    $_SESSION["choice"] =  $_POST["choice"];
    echo "This is you're choice " . $_SESSION["choice"] ;
} else {
    echo "Digit must be between number 1 and number 3";
    error_log(" Oops and error has ocurred", 3 , "errors.log");
}
?>