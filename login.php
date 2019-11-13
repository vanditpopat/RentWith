<?php
session_start();
$error = '';

if(isset($_POST['Submit'])){
    if(empty($_POST['user']) || empty($_POST['pwd'])){
        header("location: login.html");
    }
    else
    {
        $username = $_POST['user'];
        $password = $_POST['pwd'];

        include 'config.php';

        $query = "SELECT username,password from user where username=? and password=? LIMIT 1";

        $stmt = $db->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();

        if($stmt->fetch())
        {
            $_SESSION['login_user'] = $username;
            header("location: roomate.php");
        }
        else{
            header("location: login.html");
            echo ("Error" .mysqli_error($conn));
        }

        mysqli_close($db);
            }
            echo $error;
}
?>