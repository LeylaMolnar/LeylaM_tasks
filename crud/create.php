<?php
$title = "Simple CRUD app";
include '../layout/header.php';
?>
<form method="post" action="">
    <input type="text" name="fname" placeholder="First name" required><br>
    <input type="text" name="lname" placeholder="Last name" required><br>
    <input type="text" name="city" placeholder="City" required><br>
    <select name="groupID">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="other">Other</option>
    </select><br>
    <input type="submit" value="Submit" name="submit">
</form>

<?php
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];
    $groupID = $_POST["groupID"];
    include "db.php";
    $sql = "insert into studentinfo (fname, lname, city, groupID)
    values('$fname', '$lname', '$city', '$groupID')";
    if ($conn ->query($sql)) {
        echo "Success!";
    }
    else {
        echo "Error 😥: " . $conn->error;
    }
}
?>

<?php
include "../layout/footer.php";
?>