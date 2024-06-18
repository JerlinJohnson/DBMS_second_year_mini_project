<?php error_reporting(0);?>
<html>
<style>
body{
background-image:url('SS1.jpg');
backgroud-repeat:no-repeat;
background-size:100% 100%
}</style>    
<body>

<br><br><br><br><br><br><br><br><br><br><br><br>
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

$sql = "SELECT * FROM types";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "sn.no: " . $row["no"]. " - year: " . $row["year"] ." - permissions:".$row["constraints"] .  "<br>";

  }
  echo"<br>";
} else {
  echo "0 results";
}

$conn->close();
?>
<form action = "file3.php">
    <button>
        continue
    </button>
    </form>
</body>
</html>