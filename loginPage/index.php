<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
	<div class="container">
		<form method="POST">
			<div class="name">
				<h1>Login Page</h1>
			</div>
			<div class="inputbox">
				<input type="text" name="username" placeholder="Username">
				<i class='bx bxs-user'></i>
			</div>
			<div class="inputbox">
				<input type="password" name="password" placeholder="Password">
				<i class='bx bxs-lock-alt' ></i>
			</div>
			<div class="remember">
				<label> <input type="checkbox" type="checkbox"> </input>Remember me</label>
				<a href="#">Forgot Password</a>
			</div>
			<div>
				<button class="btn" name="btn"><b>Login</b></button>
			</div>
			<div class="register">
				<span>Dont have an account?<a href="#">Register</a></span>
			</div>
			<div>
				<p class="ans"></p>
			</div>
			
		</form>
	</div>

	<?php
		if(isset($_POST['btn'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(empty($username) && empty($password)) {
				echo "Username and Password is empty";
			}
			else if(empty($username)) {
			echo "Username is empty";
			}
			else if(empty($password)) {
				echo "Password is empty";
			}
			else {
				echo "Login is Success";
			}
		}
		
	?>

</body>
</html>