<?php
$servername = "db";
$username = "prac";
$password = "password";
$dbname = "prac";

//creating a connection
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

?>