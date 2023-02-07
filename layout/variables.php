<?php
$title = "Exercise 3";
include "header.php" ?>

<h2>1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    h3 tag: Hello …., You are welcome to my site.</h3>

    <form action="action.php" method="post">
        <div class="row">
            <div class="col">
                <input type="text" name="fname" placeholder="First name" class="form-control" required>
            </div>
            <div class="col">
                <input type="text" name="lname" placeholder="Last name" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Birth Date: <input type="date" name="bdate" class="form-control" required> <br>
            </div>
            <div class="col">
                Favorite color: <input type="color" name="color" class="form-control" required> <br>
            </div>
        </div>
        <input type="submit" value="submit" class="form-control">
    </form>


<h2>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.
</h2>
    <table class="table table-striped">
  <tr>
    <th>Name</th>
    <th>Fav color</th>
    <th>Pet</th>
  </tr>
  <tr>
    <td>Rosa Woods</td>
    <td>Salmon</td>
    <td>Cockatiel</td>
  </tr>
  <tr>
    <td>Keira O'Connor</td>
    <td>Pink</td>
    <td>Bunny</td>
  </tr>
</table>

<h2>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h2>
<?php
$text1 = "Starting";
$text2 = "Ending";
$text3 = $text1 . ' ' . $text2;
echo "$text1<br>$text2<br>$text3<br>Length: " . strlen($text3);
?>

<h2>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h2>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
echo "Sum of numbers: " . $num1 + $num2 + $num3;
?>

<h2>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h2>
<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<h2>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. (Hint: Use predefined variable, basename function & date function to print the date and time)</h2>

<?php include "footer.php" ?>