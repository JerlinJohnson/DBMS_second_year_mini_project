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

<form action="file12.php" method="post">
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
$sql = "SELECT * FROM lll where rollno like '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "rollno:" . $row["rollno"]."<br>". "mentorid:" . $row["mentorid"]."<br>"."mentorname:" . $row["mentorname"]."<br>"."dept:" . $row["dept"]."<br>". "warden_name:" . $row["warden_name"]. "<br>"."contact:" .$row["contact"]. "<br>"."block:" .$row["block"]. "<br>"."yrs_of_exp:" .$row["yrs_of_exp"]."<br>". "reason:" . $row["reason"]."<br>"."<br>". "intime:" . $row["intime"]."<br>"."<br>". "fromdate:" . $row["fromdate"]."<br>"."<br>". "todate:" . $row["todate"]."<br>" ;

  }
} else {
  echo "0 results";
}
echo"<br>";
?>
