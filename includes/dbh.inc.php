<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "LoginSys";
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);
if(!$conn)
{
    die("connection failed:". mysqli_connect_error());
}
?>