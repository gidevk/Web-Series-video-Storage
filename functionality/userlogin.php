<?php
	$error = '';
	if(session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}

	if(isset($_SESSION['isset']))
	{
		header('Location: ../html/demo.php');
	}

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
	$pas = $_POST['password'];
	$mode = $_POST['mode'];
	
	
	$sql = "SELECT * FROM users WHERE email ='$em' and password = '$pas' and USER_TYPE ='$mode' ";

	$result = mysqli_query($conn,$sql);
	// $resultcheck = mysqli_num_rows($result);
   $row = mysqli_fetch_array($result);
	// echo "alert($mode)";
	// $passcheck = "";

	// echo $sql;

	if($row){
		$_SESSION['isset'] = true;
		$_SESSION['email'] = $em;
		// if($mode === 'admin')
		// 	header('Location: ../html/adminindex.php');
		// else 
				header('Location: ../html/demo.php');
	
	} else{
		echo ('Your id password do not match with database..Please Signup !!!');
	}
?>