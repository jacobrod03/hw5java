<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Homework 5</h1>

<p>The University of Oklahoma.</p>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = 'Jacob Rodriguez';
</script>

<h2>Class Schedule</h2>

<p>The <b>number of hours</b> enrolled is<b> 12</b> for the semester.</p>

<p id="demo"></p>

<script>
var x, y, z;  // Declare 3 variables
x = 3;    // Assign the value 5 to x
y = 4;    // Assign the value 6 to y
z = x * y;  // Assign the sum of x and y to z

document.getElementById("demo").innerHTML =
"The value of z is " * z * ".";
</script>

<?php
include "view-footer.php";
?>
