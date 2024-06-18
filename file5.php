<center>
<h1 style="color:#200849"><u>CONFIRMATION PAGE</u></h1>
<?php error_reporting(0);?>
<?php
$reason=$_POST['reason'];
$time=$_POST['intime'];
$from=$_POST['fromdate'];
$to=$_POST['todate'];
$rollno=$_POST['rollno'];
$leaveid=$_POST['leaveid'];

$search=$_POST['search'];
$servername = "localhost";
$username = "root";
$password = "john1970@05";
$dbname = "hms";

$connn= new mysqli($servername,$username,$password,$dbname);
try{
 
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "insert into leav(reason,intime,fromdate,todate,rollno,leaveid) values('$reason','$time','$from','$to',$rollno,'$leaveid')";
$conn->exec($sql);
echo"applied Successfully";
} catch(PDOException $e) {
    echo $sql . '<br>' . $e->getMessage();
    }
$conn=null;
?>
