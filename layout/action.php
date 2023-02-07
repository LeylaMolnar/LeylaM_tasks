<?php
$title = "Exercise 3";
include "header.php";
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$bdate = $_POST["bdate"];
$color = $_POST["color"];

echo "<h3>Your name is $fname $lname </h3><br>Your birthday is $bdate<br>Your favorite color is <div style=\"color:$color\">█</div>$color"
?>


<?php include "footer.php" ?>
