<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Choose a number between 1-10 <small></small></h1>
    

      
        <form action="my_error.php" method="post">
        <label for="number">Enter You're Choise: </label>
        <input type="number" name="choice" id="choice">
        <input type="submit" value="Submit">
    </form>
    </body>
</html>

<?php

session_start();



if (isset($_POST["choice"])) {
    $choice =  $_POST["choice"];
    
} 

function countDown($choice) {
    if ($choice < 0 || $choice > 10) {
        throw new Exception('Case Out of range.');
    }
    echo " Dit is uw gekozen " . $choice ;
    
}

try {
   countDown($choice);
} catch (Exception $e) {
    echo ' Oops something went wrong: ',  $e->getMessage(), "\n";
}
?>