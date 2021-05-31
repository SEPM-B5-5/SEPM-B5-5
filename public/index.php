<!DOCTYPE html>
<html lang="en">
<!-- // [Code] Attribution:
// - Huu Nghia le
// - Mehedi Hasan Ridoy
// - Daniel Surla
 -->
<head>
	<?php include("./php/includes/head.php"); ?>
	<title>Login</title>
</head>

<div class="jumbotron text-center">
	<h1>Sign<small>In</small></h1>
	<p><i>Human Resources Management - Shift Roster & Calendar</i></p>
</div>

<body class="container">
	<?php
		include("./php/includes/navbar.php");
	?>
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

<?php

$username = $_POST["username"];
$password = $_POST["password"];

$sql = mysqli_connect("localhost", "root", "root", "rostersys");

//query
$query = "SELECT * FROM staff WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($sql, $query);

// If a row is returned, that email+password match exists
// The account is valid
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['staffId'] = $row['staffId'];
    $_SESSION['priority'] = $row['priority'];

    // send the user to their calendar (profile is placeholder landing page for now)
    header("Location:home.php?staffId={$_SESSION['staffId']}");
} else {
    // Otherwise, display an error on the login page
    header("Location:index.php?status=418");
}
?>