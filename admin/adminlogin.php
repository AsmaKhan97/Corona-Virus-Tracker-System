<!DOCTYPE html>

<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="style1.css">
<?php include 'link\links.php' ; ?>
</head>
<body>
<header>
<div class="container mt-5 center-div shadow ">
  <div class="heading mb-5 text-center text-uppercase text-white">ADMIN LOGIN PAGE</div>
     <div class="container row d-flex flex-row justify-content-center mb-5">
         <div class="admin-form shadow p-2">
		    <form action="logincheck.php" method="POST">
			    <div class="form-group">
				<label>ADMIN ID</label>
				<input type="text" name="user" value="" class="form-control" autocomplete="off" required>
				</div>
				<div class="form-group">
				<label>Password</label>
				<input type="password" name="pass" value="" class="form-control" autocomplete="off" required>
				</div>
				<input type="submit" class="btn btn-primary" name="submit">
			</form>
			
         </div>

     </div><a class="btn mb-2 btn-primary" href="\CoronaVirus Tracker/index.php">Back to Home Page</a>
  </div>
</header>
</body>
</html>