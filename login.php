<!DOCTYPE html>
<html lang="en"style="height:100%;">
<head>
  <title>Exceed </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<br>
<br>
<div class="container">
    <center><h1>Sign Up and Login</h1></center>
</div>
	<div class="container">
		<div class="row">
			     <div class="col-sm-6">
					  <div class="panel panel-info">
                      <div class="panel-heading">Sign in Form</div>
						<div class="panel-body">
						<?php
						if(isset($_GET['run'])  && $_GET['run']=="failed")
						{
							echo "Your email or password is not correct";
						}
						
						
						?>
							  <form role="form" action="signin_sub.php" method="post">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<button type="submit" class="btn btn-info">Submit</button>
							  </form>
						  </div>
						  </div>
					  </div>
				 
				   <div class="col-sm-6">
							<div class="panel panel-info" >
								
								<div class="panel-heading">Signup Form</div>
							<div class="panel-body">
							<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>
							  <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="Enter name">
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
									<div class="form-group">
								  <label for="name">Contact number:</label>
								  <input type="text" class="form-control" name="c" id="name" placeholder="Enter phone number">
								</div>
								<button type="submit" class="btn btn-info">Submit</button>
							  </form>
						  </div>
						  </div>
			      </div>
	   </div>
   </div>
   <footer><center><b>
Exceed 2019</b></center></footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>