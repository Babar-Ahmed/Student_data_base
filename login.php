<!DOCTYPE html>
<html>
<head>
	<title>User Login
	</title>



	<meta charset="utf-8">
	<meta name="viewport" content="=width=device-width,initial-scale=1.0">
	<title>Project</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--Main Css-->
<link rel="stylesheet" type="text/css" href="design.css">
<!---Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<style>

.loginform{
margin-top: 100px;
}

	

	</style>
</head>
<body>


<nav class="container-fluid">
	<div class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark container-fluid">
		<a href="#" class="navbar-brand">Students</a>
		<ul class="navbar-nav">
			<li class="nav-item"><a href="login.php" class="nav-link text-white">Login</a>
				<li class="nav-item"><a href="logi.php" class="nav-link text-white">Sign up</a>
		</ul>
	</div>
</nav>


<div class="container">
	<form class="loginform">
		<h1 class="text-center">Login user </h1>
		<div class="form-group">
			<label for="username">User name</label>
			<input type="text" name="username" placeholder="username" class="form-control w-75">
		</div>

		<div class="form-group">
			<label for="username">User name</label>
			<input type="password" name="password" placeholder="password" class="form-control w-75">
		</div>

		<input type="submit" name="submit" value="Submit" class="btn btn-success w-75">
	</form>
</div>



<!--jquery-->
<script src="js/jquery-3.5.0.min.js"></script>
<!--bootstrap js-->
<script src="js/bootstrap.min.js"></script>
<!--font awesome -->
<script src="js/all.js"></script>
<!---main javascript---->
<script src="js/script.js"></script>
</body>
</body>
</html>