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

<p>Enter your information in the field, then click "Submit":</p>

<form id="frm1" action="/action_page.php">
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br><br>
  <input type="button" onclick="myFunction()" value="Submit">
</form>

<script>
function myFunction() {
  document.getElementById("frm1").submit();
}
</script>

<h3>OU Message to Students</h3>

<p id="demo">
  Over the past four years, our journey at the University of Oklahoma has been nothing short of transformative. Our “Lead On, University” Strategic Plan, launched in July 2020, has ignited a spirit of excellence within us. Together, we have achieved milestones that are reshaping our future in ways that will change lives for generations to come.
</p>

<button type="button" onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
</script>

//code here

const xValues = [50,60,70,80,90,100,110,120,130,140,150];
const yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor:"rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options:{...}
});

<?php
include "view-footer.php";
?>
