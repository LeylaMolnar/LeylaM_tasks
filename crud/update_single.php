<?php
$title = "Update single record";
include "../layout/header.php";
$a = $_GET['ID'];
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM studentinfo WHERE ID='$a'");
$row = mysqli_fetch_array($result);
?>
<h2>Update your information</h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First name" required value="<?php echo $row['fname']; ?>"><br>
    <input type="text" name="lname" placeholder="Last name" required value="<?php echo $row['lname']; ?>"><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']; ?>"><br>
    <select name="groupID" value="<?php echo $row['groupID']; ?>">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="other">Other</option>
    </select><br>
    <input type="submit" value="Update info" name="update"> <br><br>
    <input type="submit" value="Delete info" name="delete">
</form>

<?php
if (isset($_POST["update"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];
    $groupID = $_POST["groupID"];

    $sql = "UPDATE studentinfo SET fname = '$fname', lname = '$lname', city = '$city', groupID = '$groupID' 
        WHERE ID = '$_GET[ID]'";
    if ($conn ->query($sql)) {
        echo "Success!";
    }
    else {
        echo "Error 😥: " . $conn->error;
    }
}
if (isset($_POST["delete"])){
    $sql = "DELETE FROM studentinfo WHERE ID='$_GET[ID]'";
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