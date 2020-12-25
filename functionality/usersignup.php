<?php

$servername="localhost";
$username = "root";
$password ="";
$dbname = "webshub";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die("Connection Failed : ".$conn->connect_error);
}

$em = $_POST['email'];
$ps = $_POST['password'];
$regAs = $_POST['user'];

$sql = "insert into users (email, password,USER_TYPE) values ('$em','$ps' , '$regAs')";
$result = $conn->query($sql);
if($result)
{
	header('Location: ../html/login.php');
	// echo ("data inserted sucessfully");
}
else
{
	die("connection failed");
}
?>