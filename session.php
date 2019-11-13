<?php
 
$conn = mysqli_connect("localhost","root","","rentwith");

session_start();

$user_check = $_SESSION['login_user'];
//$hosp_check = $_SESSION['login_hosp'];
$query = "SELECT username from user where username = '$user_check'";
//$query1 = "SELECT email from hospitalinfo where email = '$hosp_check'";
$ses_sql = mysqli_query($conn, $query);
//$ses_sql1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($ses_sql);
//$row1 = mysqli_fetch_assoc($ses_sql1);
$login_session = $row['username'];
//$login_sessions = $row1['email'];
?>