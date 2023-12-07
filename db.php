<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signupform";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die(mysqli_error($conn)); //show the error
}

?>