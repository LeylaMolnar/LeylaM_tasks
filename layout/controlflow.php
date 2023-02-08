<?php
$title = "Exercise 4";
include "header.php"; ?>

<h2>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's
    August or not:</h2>
<?php
$month = date('F');
if ($month == "Aug")
    echo "It's August, so it's still holiday.";
else
    echo "Not August, this is $month so I don't have any holidays";
?>

<h2>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
</h2>
<?php
$color = "red";
if ($color == "red") {
    echo "The color is red.";
} else {
    echo "The color is not red.";
}
?>

<h2>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score
</h2>
<?php
$score = 85;
echo "Grade: ";
switch (true) {
    case ($score >= 80):
        echo "Excellent";
        break;
    case ($score >= 70):
        echo "Great";
        break;
    case ($score >= 60):
        echo "Good";
        break;
    case ($score >= 50):
        echo "Pass";
        break;

    default:
        echo "Fail";
        break;
}
?>

<h2>4.Write a program to get inputs (age and name) from the user and based on their age, decide if they are eligible for
    voting. (18 or more than 18 years is eligible for voting,)</h2>
<form action="eligible.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" name="name" placeholder="Name" class="form-control" required>
        </div>
        <div class="col">
            <input type="number" name="age" placeholder="Age" class="form-control" required>
        </div>
    </div>
    <input type="submit" value="submit" class="form-control">
</form>

<h2>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name.
    Use Switch statement with strops function to print the name of the browser as below:
    If someone is using Chrome it should print, you are using Goolge Chrome….</h2>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
switch (true) {
    case strpos($user_agent, 'Edg'):
        echo "You are using Microsoft Edge";
        break;
    case strpos($user_agent, 'Firefox'):
        echo "You are using Firefox";
        break;
    case strpos($user_agent, 'Chrome'):
        echo "You are using Chrome";
        break;
    default:
        echo "Unable to detect browser";
        break;
}


?>

<?php include "footer.php" ?>