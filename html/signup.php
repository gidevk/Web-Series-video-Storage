<!DOCTYPE html>
<html>
<head>
	<title>Web Series Hub Sign up</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 	<style type="text/css">
 		body {
  				background-image: url("../images/back.png");
			}
 	</style>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">

	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4" style="background-color: white; margin-top: 40px; border-radius: 5px;">
				<form action="../functionality/usersignup.php" method="POST">
					<a href="../html/index.php" style="float: right;">Home</a>
					<h2 style="text-align: center;"><span style="color: #f0ad4e;">Web Series Hub</span> Sign-up</h2>
					<div class="imgcontainer">
      					<img src="../images/ul.png" alt="Avatar" class="avatar">
    				</div><hr>
					
  					<div class="form-group">
    					<label for="exampleInputEmail1">Email address</label>
	  	  				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
		    			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
 					</div>
 	 				<div class="form-group">
		    			<label for="exampleInputPassword1">Password</label>
	    				<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
	  				</div>	
	  				<div class="form-group">
		    			<label for="exampleInputPassword1">Confirm Password</label>
	    				<input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" required>

						<br>
						<label for="cars" >register As:</label>

							<select name="user" id="user" class="form-control">
							<option value="user">User</option>
							<option value="Admin">Admin</option>
							</select>
						
	  				</div>
		  			<div class="form-group form-check">
		  				<small id="emailHelp" class="form-text text-muted">Already have an account</small><a href="../html/login.php">&nbsp;&nbsp;Sign-in</a>
  					</div>
  					<button type="submit" id="btnsubmit" class="btn btn-warning">Sign up</button><br>
  					<!-- <input type="submit" value="signup"> -->
  					<!-- <button type="submit" class="btn btn-danger" style="float: right;">Admin Sign-in</button> -->
				</form><br/>

				<script type="text/javascript">
    				$(function () 
    				{
        				$("#btnsubmit").click(function () 
        				{
            				var password = $("#password").val();
            				var confirmPassword = $("#confirmpassword").val();
            				if (password != confirmPassword) 
            				{
                				alert("Password must be same !!!!");
                				return false;
            				}
            				return true;
        				});
    				});
				</script>

			</div>
			<div class="col-md-3">
			</div>
		</div><!-- row -->
	</div><!-- container -->

</body>
</html>