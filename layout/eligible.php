<?php
$title = "Exercise 3";
include "header.php";
$name = $_POST["name"];
$age = $_POST["age"];
echo "Hi $name<br>";
if ($age >= 18) {
    echo "You are eligible to vote";
}
else {
    echo "You are not eligble to vote.";
}
?>


<?php include "footer.php" ?>
