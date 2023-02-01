<?php
$title = "Exercise 1";
include "header.php"?>

    <h3>3.1 Write a simple PHP script to print your information (Name and your groupid)</h3>
    <?php
    echo "Leyla Molnár<br>BBCAP22";
    ?>
    <h3>3.2 Write PHP code to display the following message</h3>
    <?php
    echo "Hello world! My name is \"Leyla\"";
    ?>
    <h3>3.3 Write the PHP code in to display the current date</h3>
    <?php
    echo date("d.m.Y");
    ?>
    <h3>3.4 Variables in php </h3>
    <?php
    $title1 = "PHP is interesting";
    echo "<h1>" . $title1 . "</h1";
    ?>

    <h3>3.5 Tables & Variables</h3>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table>
    <tr>
    <th>S.N</th><th>Name</th><th>Grade</th>
    </tr>
    <tr>
    <td>1</td><td>Pekka</td><td>$g1</td>
    </tr>
    <tr>
    <td>2</td><td>Johanna</td><td>$g2</td>
    </tr>
    <tr>
    <td>3</td><td>John</td><td>$g3</td>
    </tr>
    </table>
    ";
    ?>
    <h3>4 Screenshot of development environment </h3>
    <img src="images/ss.png" alt="Dev envirnomment screenshot" width="80%">
<?php include "footer.php"?>