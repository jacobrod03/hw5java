<?php
$pageTitle = "Home";
include "view-header.php";
?>
<h1>Homework 6</h1>

<p>THE UNIVERSITY OF OKLAHOMA</p>

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
"The value of z is " + z + ".";  // Corrected the syntax for displaying the value of z
</script>

<p>Enter your information in the field, then click "Submit":</p>

<form id="frm1">
  First name: <input type="text" name="fname" id="fname"><br>
  Last name: <input type="text" name="lname" id="lname"><br><br>
  <input type="button" onclick="submitForm()" value="Submit">
</form>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Axios -->
<script>
function submitForm() {
  // Get the values from the form
  const firstName = document.getElementById('fname').value;
  const lastName = document.getElementById('lname').value;

  // Use Axios to send a POST request with the form data
  axios.post('/action_page.php', {
    fname: firstName,
    lname: lastName
  })
  .then(function (response) {
    // Handle the response here
    console.log(response);
    alert('Form submitted successfully!');
  })
  .catch(function (error) {
    // Handle any errors here
    console.error(error);
    alert('There was an error submitting the form.');
  });
}
</script>

<h3>OU Message to Students</h3>

<p id="demo">
  Over the past four years, our journey at the University of Oklahoma has been nothing short of transformative. Our “Lead On, University” Strategic Plan, launched in July 2020, has ignited a spirit of excellence within us. Together, we have achieved milestones that are reshaping our future in ways that will change lives for generations to come.
</p>

<button type="button" onclick="changeParagraph()">Go Sooners</button>

<script>
function changeParagraph() {
  // Make an Axios call to fetch new message content
  axios.get('/message_api.php') // Assuming you have an API endpoint that provides a new message
  .then(function (response) {
    document.getElementById("demo").innerHTML = response.data.message;  // Update the paragraph with the new message
  })
  .catch(function (error) {
    console.error(error);
    alert('There was an error fetching the message.');
  });
}
</script>

<html>
<head>
  <title>Classes Chart</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="classesChart" width="400" height="200"></canvas>
  <script>
    
Chart.defaults.backgroundColor = '#9BD0F5';
Chart.defaults.borderColor = '#36A2EB';
Chart.defaults.color = '#000';
    
    const ctx = document.getElementById('classesChart').getContext('2d');
    const classesChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['English', 'Math', 'History', 'Science'],
        datasets: [{
          label: 'Scores',
          data: [85, 90, 78, 88], // Example scores for each class
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>

<?php
include "view-footer.php";
?>
