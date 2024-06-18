<?php error_reporting(0);?>
<html>
<style>
body{
background-image:url('SS2.jpg');
backgroud-repeat:no-repeat;
background-size:100% 100%
}</style> 
<center> 
<body>

<form action="file3.php" method="post">
Search <input type="text" name="search"><br>
<input type ="submit">
</form>

</body>
</html>
<?php
$search=$_POST['search'];
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
$sql = "SELECT * FROM leav where rollno like '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "reason:" . $row["reason"]."<br>". "time:" . $row["intime"]."<br>"."from:" . $row["fromdate"]."<br>"."to:" . $row["todate"]."<br>". "rollno:" . $row["rollno"]. "<br>"."leaveid:" .$row["leaveid"]. "<br>";

  }
} else {
  echo "0 results";
}
echo"<br>";
?>
<html>
<body>
<form action = "file4.php">
    <button>
        apply Now
    </button>
</form>

  
</body>
</html>