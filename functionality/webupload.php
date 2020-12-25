<?php
		$msg = "";
		if(isset($_POST['submit']))
		{
				
			for($r = 0; $r <2; $r++)
			{
				$target = '../html/uploads/'.basename($_FILES['imageinput']['name'][$r]);

				if(move_uploaded_file($_FILES['imageinput']['tmp_name'][$r], $target))
				{
					$msg = "image upload sucessfully";
				}

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

			$name = $_POST['name'];
			$genre = $_POST['genre'];
			$season = $_POST['season'];
			$episode = $_POST['episode'];
			$duration = $_POST['duration'];
			$rating = $_POST['rating'];
			$imdb = $_POST['imdb'];
			$imageinput = $_FILES['imageinput']['name'][0];
			$videoinput = $_FILES['imageinput']['name'][1];

			$sql = "insert into webupload values 
			( '' , '$name','$genre','$season','$episode','$duration','$rating','$imdb','$imageinput','$videoinput')";

			$result = $conn->query($sql);

			if($result)
			{
				// header('Location: ../html/login.php');
				// echo ("data inserted sucessfully");
				echo "<script>
				alert('data inserted sucessfully ');
				window.location.href='../html/adminindex.php';
				</script>";
			}

			else
			{
				die("connection failed");
			}
	    }

		$conn->close();
?>