<?php
$title = "Reading data from database";
include "../layout/header.php";
include "db.php";
$sql = "SELECT * FROM studentinfo";
$result = $conn -> query($sql);
if ($result->num_rows > 0){
    echo "
    <table class='table'>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>GroupID</th>
    </tr>";
    while ($row = $result -> fetch_assoc()){
        echo "
            <tr>
                <td><a href='update_single.php?ID=$row[ID]' target='_blank'>$row[ID]</a></td>
                <td>$row[fname]</td>
                <td>$row[lname]</td>
                <td>$row[city]</td>
                <td>$row[groupID]</td>
            </tr>
        ";
    }
    echo "</table>";
}
else {
    echo "No data available";
}
$conn -> close();
?>

<?php
include "../layout/footer.php";
?>