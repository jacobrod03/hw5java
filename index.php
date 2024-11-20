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
x = 3;    // Assign the value 3 to x
y = 4;    // Assign the value 4 to y
z = x * y;  // Assign the product of x and y to z

document.getElementById("demo").innerHTML =
"The value of z is " + z + ".";  
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

  // Use Axios to send a POST request 
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
  axios.get('/message_api.php') 
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script> <!-- Lodash -->
  <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script> <!-- Moment.js -->
</head>
<body>
  <!-- Chart Canvas -->
  <canvas id="classesChart" width="400" height="200"></canvas>
  
  <button onclick="randomizeChart()">Randomize Scores</button> 

  <h3>Current Date and Time</h3>
  <p id="current-time"></p>

  <h3>Next Semester Countdown</h3>
  <p id="semester-countdown"></p>

  <script>

    Chart.defaults.backgroundColor = '#9BD0F5';
    Chart.defaults.borderColor = '#36A2EB';
    Chart.defaults.color = '#000';
    
    const classNames = ['English', 'Math', 'History', 'Science'];
    const originalScores = [85, 90, 78, 88];  // Original scores

    // Create the chart initially with the original scores
    const ctx = document.getElementById('classesChart').getContext('2d');
    let classesChart = new Chart(ctx, {
      type: 'bar',  // Chart type: bar chart
      data: {
        labels: classNames,  // Class names as labels
        datasets: [{
          label: 'Scores',  // Dataset label
          data: originalScores,  // Initial scores
          backgroundColor: [  // Background color for each bar
            'rgba(255, 99, 132, 0.2)',  // English
            'rgba(54, 162, 235, 0.2)',  // Math
            'rgba(255, 206, 86, 0.2)',  // History
            'rgba(75, 192, 192, 0.2)'   // Science
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
            beginAtZero: true  // Start y-axis at 0
          }
        }
      }
    });

    // Function to randomize and update chart scores
    function randomizeChart() {
      // Use Lodash to shuffle the original scores and update the chart
      const randomizedScores = _.shuffle(originalScores);  

      // Update the chart data with randomized scores
      classesChart.data.datasets[0].data = randomizedScores;
      
      // Refresh the chart
      classesChart.update();
      
      // Log the randomized scores to the console
      console.log('Randomized Scores:', randomizedScores);
    }

    // Display current date and time using Moment.js
    document.getElementById('current-time').innerHTML = 'Current Date and Time: ' + moment().format('MMMM Do YYYY, h:mm:ss a');

    // Calculate and display time until the next semester (assumed to be January 15)
    var nextSemester = moment('2025-01-15');
    var timeUntilSemester = nextSemester.fromNow();
    document.getElementById('semester-countdown').innerHTML = 'Next semester starts in: ' + timeUntilSemester;

  </script>
</body>
</html>

<?php
include "view-footer.php";
?>
