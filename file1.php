<html>

<style>
body{
background-image:url('SS.jpg');
backgroud-repeat:no-repeat;
background-size:100% 100%
}</style>
<center>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "john1970@05";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<form action = "file2.php">
    <button style="font-size:120%";>
      apply leave
    </button>
</form>
<form action = "file6.php">
    <button style="font-size:120%";>
        Cancel leave
    </button>
</form>
  
</body>
</html>
