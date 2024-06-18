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

<form action="file8.php" method="post">
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
$sql = "SELECT * FROM student where rollno like '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "rollno:" . $row["rollno"]."<br>". "name:" . $row["name"]."<br>"."contact:" . $row["contact"]."<br>"."dept:" . $row["dept"]."<br>". "block:" . $row["block"]. "<br>"."year:" .$row["year"]. "<br>"."floor:" .$row["floor"]. "<br>"."mailid:" .$row["mailid"]. "<br>";

  }
} else {
  echo "0 results";
}
echo"<br>";
?>
<html>
<body>
<form action = "file9.php">
    <button>
        add
    </button>
</form>
<form action = "file11.php">
    <button>
        delete
    </button>
</form>

  
</body>
</html>