<!DOCTYPE html>
<html>
<head>
	<title>Web Series Hub Admin Login</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 	<style type="text/css">
 		body {
  				background-image: url("../images/back.png");
			}
 	</style>

</head>
<body>

	<link rel="stylesheet" type="text/css" href="../css/adminlogin.css">

	<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>

			<div class="col-md-6" style="background-color: white; margin-top: 40px; border-radius: 5px;">
				<form action="#../functionality/userlogin.php" method="POST"><br/>
				<!--  -->
					<a href="../html/index.php" style="float: right;">Home</a>
					<h2 style="text-align: center;"><span style="color: #f0ad4e;">Web Series Hub</span> Admin </h2>
					<div class="imgcontainer">
      					<img src="../images/ul.png" alt="Avatar" class="avatar">
    				</div><hr>
					
  					<div class="form-group">
    					<label for="exampleInputEmail1">Email address</label>
	  	  				<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
		    			<!-- <small id="emailHelp" class="form-text text-muted" style="font-size: 14px;">We'll never share your email with anyone else.</small> -->
 					</div>
 	 				<div class="form-group">
		    			<label for="exampleInputPassword1">Password</label>
	    				<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
					  </div>	
					  <div class="form-group">
		  				<small id="emailHelp" class="form-text text-muted">doesn't have an account</small><a href="../html/signup.php">&nbsp;&nbsp;Sign-up</a>
					  </div>
					  
		  			<div class="form-group">
		  				<small id="emailHelp" class="form-text text-muted" style="font-size: 14px;">User login</small><a href="../html/login.php">&nbsp;&nbsp;click Here</a>
					  </div>
					
					   <input type="text" id="mode" name="mode" value="admin" hidden>
					 
					 
					  <button type="submit" id="btnsubmit" class="btn btn-warning">Sign in</button><br>
			
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
			header('Location: ../html/adminindex.php');
		// else 
				// header('Location: ../html/demo.php');
	
	} else{
		echo ('Your id password do not match with database..Please Signup !!!');
	}
?>

				
				</form><br/>

				<!-- <script type="text/javascript">
    				$(function () 
    				{
        				$("#btnsubmit").click(function () 
        				{
            				var password = $("#password").val(); 
            				var confirmPassword = "12345";
            				var email = $("#email").val();
            				var confirmemail = "idevk@gmail.com";
            				if (password != confirmPassword && email != confirmemail) 
            				{
                				alert("!! Wrong Credentials for Login !!");
                				return false;
            				}
            				return true;
        				});
    				});
				</script> -->


			</div>

			<div class="col-md-3">
			</div>
		</div><!-- row -->
	</div><!-- container -->

</body>
</html>