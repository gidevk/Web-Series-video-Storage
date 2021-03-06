<!DOCTYPE html>
<html>
<head>
	<title>admin index</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body style="background-color: #c3e3e8;">

	<link rel="stylesheet" type="text/css" href="../css/adminindex.css">

	<nav class="navbar navbar-inverse fixed-top" style="height: 60px; background-color: #52829e; border:0px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color:#f0ad4e;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style=" font-size: 25px;color: white;">Master Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="border-color: #3c5984; width: 100%;">
          <ul class="nav navbar-nav" style="width: auto; float: right; ">
            <li style="float:right;"><a href="#"  style="color: white; font-size: 20px;"> Hello 
            <li>
              <p style="float: right; font-size: larger;">Hello<span style='font-size:20px;'>&#128522;</span>&nbsp;&nbsp;
              <?php
                if(isset($_SESSION['email']))
                  echo $_SESSION['email']
              ?> &nbsp;<i class='far fa-grin' style='font-size:20px'></i></a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row" style=" margin-top: -20px;">
      	<div class="col-md-3" style="margin-top: 35px;">
      		<div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" style="height: 60px;"><h4><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Dashboard</h4></a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Setting</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;Page Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-adjust"></span>&nbsp;&nbsp;Matadata</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-magnet"></span>&nbsp;&nbsp;Introduction</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Items</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Slider Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Team Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;Service Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Portfolio Management</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Enquary Management</a>  
          </div>
      	</div>

      	<div class="col-md-9">
          <div class="col-md-12" style="margin-top:35px;">
            <p style="font-size: xx-large; color: #264865;">Manage Web Series Hub</p>
          </div>
      		<div class="row">

            <div class="col-md-4" onclick="location.href='#'">
              <div class="thumbnail tk"><img src="../images/a1.jpg" ></div>
              <h2>Admin</h2>        
            </div><!-- end of col-md-4 -->

            <div class="col-md-4">
              <div class="thumbnail tk">
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal" style="background-color: white; height: 225px; width: 300px; text-align: center;">
    <img src="../images/a2.png" class="center">
  </button>

  
              </div>
              <h2>Upload</h2>
            </div><!-- end of col-md-4 -->

            <div class="col-md-4" onclick="location.href='demo.php'">
              <div class="thumbnail tk">
                <img src="../images/a3.png">
              </div>
              <h2>Users</h2>
            </div><!-- end of col-md-4 -->

        <!-- <div class="col-md-3" onclick="location.href='stakeholder.html'" style="margin-top:35px;">
          <div class="thumbnail tk"><img src="../images/a4.png"></div>
          <h2>Earning</h2>
        </div> --> <!-- end of col-md-4-->

          <div class="col-md-6">
        	 <img src="../images/a5.png" style="width: 100%; height: 300px;">
          </div>

          <div class="col-md-6">
        	 <img src="../images/a6.png" style="width: 100%; height: 300px;">
          </div>

        </div> <!-- row col md 9 -->
      </div><!-- col md 9 -->
    </div><!--end of row--><br><br>
  </div><!-- container fluid -->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <p class="modal-title" style="font-size: 33px; color: #215d88;">WebSeries Upload Form</p>
          <button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="../functionality/webupload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInput">Name of Web Series</label>
              <input type="text" class="form-control" id="inputname" aria-describedby="emailHelp" placeholder="Enter web series" name="name">
            </div>

            <div class="form-group">
              <label for="sel1">Genre of Web Series</label>
              <select class="form-control" id="genre" name="genre">
                <option>Comedy</option>
                <option>Drama</option>
                <option>Thriller</option>
                <option>Children</option>
                <option>Sci-fi/Fantacy</option>
                <option>Other</option>
              </select>
            </div>

            <div class="form-group">
              <label for="sel1">Number of Seasons</label>
              <input type="number" class="form-control" id="inputseason" aria-describedby="emailHelp" placeholder="Enter seasons" name="season">
            </div>

            <div class="form-group">
              <label for="sel1">Number of Episodes</label>
              <input type="number" class="form-control" id="inputepisode" aria-describedby="emailHelp" placeholder="no. of episodes" name="episode">
            </div>

            <div class="form-group">
              <label for="sel1">Duration of Episodes</label>
              <input type="text" class="form-control" id="inputduration" aria-describedby="emailHelp" placeholder="Duration" name="duration">
            </div>


          <div class="form-group">
            <label for="sel1"> Rating</label>
            <select class="form-control" id="rating" name="rating">
              <option>1 star</option>
              <option>2 star</option>
              <option>3 star</option>
              <option>4 star</option>
              <option>5 star</option>
            </select>
          </div>

          <div class="form-group">
            <label for="sel1"> IMDB</label>
            <select class="form-control" id="imdb" name="imdb">
              <option>1 star</option>
              <option>2 star</option>
              <option>3 star</option>
              <option>4 star</option>
              <option>5 star</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">Image and video input</label>
            <input type="file" class="form-control-file" id="imageinput" name="imageinput[]" multiple="multiple">
          </div>

          <!-- <div class="form-group">
            <label for="exampleFormControlFile1">Video file input</label>
            <input type="file" class="form-control-file" id="videoinput" name="videoinput">
          </div> -->

          <button type="submit" name="submit" class="btn btn-primary" style="float: left;">Upload</button><br><br>

</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html>