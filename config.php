<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "rentwith";

$db = new mysqli($host, $dbusername, $dbpassword, $dbname);

if($db->connect_error){
    die("Connection failed: ".$db->Connect_error);
}

?>