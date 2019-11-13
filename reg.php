<?php
$fname="";
$lname="";
$us="";
$gen="";
$em="";
$ms="";
$occ="";
$pass="";
$a="";
$conn="";
$bud="";
$conn=new mysqli("localhost","root","","rentwith");
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
if(isset($_POST["fname"])){
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$us=$_POST["user"];
$gen=$_POST["gender"];
$em=$_POST["email"];
$ms=$_POST["maritalstatus"];
$occ=$_POST["occupation"];
$pass=$_POST["pwd"];
$a=$_POST['age'];
$con=$_POST['contact'];
$bud=$_POST['budget'];
$loc=$_POST['location'];
$sql="INSERT INTO user(`firstname`,`lastname`,`username`,`password`,`email`,`gender`,`age`,`contact`,`maritalstatus`,`occupation`,`budget`,`location`) VALUES('$fname','$lname','$us','$pass','$em','$gen','$a','$con','$ms','$occ','$bud','$loc')";

$result=mysqli_query($conn,$sql);
echo ("Error" .mysqli_error($conn));
//header("Location: img.php");
}


?>