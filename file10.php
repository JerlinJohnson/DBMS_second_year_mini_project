<center>
<h1 style="color:#200849"><u>CONFIRMATION PAGE</u></h1>
<?php error_reporting(0);?>
<?php
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$dept=$_POST['dept'];
$block=$_POST['block'];
$year=$_POST['year'];
$floor=$_POST['floor'];
$mailid=$_POST['mailid'];
$search=$_POST['search'];
$servername = "localhost";
$username = "root";
$password = "john1970@05";
$dbname = "hms";

$connn= new mysqli($servername,$username,$password,$dbname);
try{
 
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into student(rollno,name,contact,dept,block,year,floor,mailid) values($rollno,'$name',$contact,'$dept','$block',$year,'$floor','$mailid')";
$conn->exec($sql);
echo"added Successfully";
} catch(PDOException $e) {
    echo $sql . '<br>' . $e->getMessage();
    }
$conn=null;
?>
<form action = "file8.php">
    <button style="font-size:120%";>
        exit
    </button>
</form>