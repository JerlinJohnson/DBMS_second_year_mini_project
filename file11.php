<?php error_reporting(0);?>
<?php

echo "DELETING ADDED STUDENT <br>.<br>";
?>
<html>
<style>
body{
background-image:url('SS3.jpg');
backgroud-repeat:no-repeat;
background-size:100% 100%
}</style> 
<center>
<body>
<form method="get">
ROLLNO:
<input type="number" name='rollno'>
<button type="submit">enter</button>
<?php
$servername = "localhost";
$username = "root";
$password = "john1970@05";
$dbname = "hms";

$rollno=$_GET['rollno'];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // sql to delete a record
  $sql = "DELETE FROM student WHERE rollno='$rollno'";
  
  if ($conn->query($sql) === TRUE) {
    
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
  ?>
  </form>
  </body>
  </center>
  </html>
  <form action = "file8.php">
    <button style="font-size:120%";>
        exit
    </button>
</form>