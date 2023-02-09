<?php
$title = "Calculator";
include "header.php";
?>

<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1" required>
    <input type="number" placeholder="Enter your second number" name="num2" required>
    <select name="operator">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
    <input type="submit" name="cal" value="calculate">
</form>
<?php
echo isset($_GET["cal"]);
if (isset($_GET["cal"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'mul':
            $result = $num1 * $num2;
            break;
        case 'div':
            $result = $num1 / $num2;
            break;

        default:
            echo "Error. help.";
            break;
    }
}
if (isset($result)) {
    echo "The result is " . $result;
}


include "footer.php";
?>