<!DOCTYPE html>
<html lang="en">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">// JQuery</script>

	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous">// JQuery UI</script>
<!--Getting Started Bootstrap. [online] Available at: "https://getbootstrap.com/docs/3.4/getting-started/#download". [Accessed on: 19/04/21]-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>

<div class="jumbotron text-center">
	<h1>Sign<small>In</small></h1>
	<p><i>Human Resources Management - Shift Roster & Calendar</i></p>
</div>

<body class="container">
	<div class="mx-auto">
		<div class="col-md-4 offset-md-4 text-center">
			<form class="form-signin">
				<img src="./imgs/image222.png" alt="Custom logo by Daniel Surla" width="64" height="64">
				<h1 class="h1 mb-3 font-weight-bold">Hello, and Welcome</h1>
				<label for="staff-member-username" class="sr-only">Username</label>
				<input type="text" name="username" id="staff-member-username" class="form-control" placeholder="Username" required autofocus>
				<br>
				<label for="staff-member-password" class="sr-only">Password</label>
				<input type="password" name="password" id="staff-member-password" class="form-control" placeholder="Password" required autofocus>
				<br>
				<!-- <button type="submit" class="btn btn-lg btn-success btn-block">Login</button> -->
				<a href="./php/home.php" class="btn btn-lg btn-success btn-block">Login</a>
			</form>
		</div>
	</div>
</body>

<footer></footer>
</html>