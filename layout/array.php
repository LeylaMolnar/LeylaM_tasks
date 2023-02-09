<?php
$title = "Exercise 5";
include "header.php"; ?>
<h2>1. Write a php script to display courses as list. Use li</h2>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $value) {
    echo "<li>$value";
}
?>

<h2>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump
    information about a variable. array_values() is an inbuilt function that returns all the values of an array and not
    the keys.</h2>
<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[0]);
print_r(array_values($courses1));
?>

<h2>3. Sort the following array </h2>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
print_r(array_values($courses3));
echo "<br>";
ksort($courses3);
print_r(array_values($courses3));
echo "<br>";
arsort($courses3);
print_r(array_values($courses3));
echo "<br>";
krsort($courses3);
print_r(array_values($courses3));
?>

<h2>4. Change the following array's all values to upper case.</h2>
<?php
$courses4 = array("php", "html", "javascript", "cms", "project");
foreach ($courses4 as $value) {

    echo strtoupper("$value") . " ";
}
?>

<h2>5. List all your favorite colors and their hexadecimal equivalents.</h2>
<?php
$colors = array("Pink" => "#F5A9B8", "Blue" => "#5BCEFA", "Pastel Mint" => "#daffe7");
array($colors);
print_r($colors);
?>

<h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>
<?php
$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
//The explode function breaks a string into an array along a specified separator
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
//The count function returns the number of elements in an array
$temp_array_length = count($temp_array);
//Sums all values in $temp_array
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
//The sort function orders the values in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
//Prints the last five values of the array. Since the array was ordered earlier, this prints the 5 highest values.
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
include "footer.php";
?>