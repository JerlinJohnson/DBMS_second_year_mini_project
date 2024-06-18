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
<form action = "file1.php">
    <button style="font-size:120%";>
      student
    </button>
</form>
<form action = "file8.php">
    <button style="font-size:120%";>
        mentor
    </button>
    </form>
<form action = "file12.php">
    <button style="font-size:120%";>
        warden
    </button>
</form>
  
</body>
</html>