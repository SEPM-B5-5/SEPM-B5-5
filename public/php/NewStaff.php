<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include("./includes/head.php");
	?>
	<title>New Staff</title>
</head>
<body class="container">
	<?php
		include("./includes/navbar.php");
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
				<label for="staff-member-firstname">First Name:</label>
				<input type="text" name="firstname" id="staff-member-firstname" class="form-control" required>
				<label for="staff-member-lastname">Last Name:</label>
				<input type="text" name="lastname" id="staff-member-lastname" class="form-control" required>
				<label for="staff-member-priority">Priority:</label>
				<select name="priority" id="staff-member-priority" class="form-control" required>
					<option value="employee">Employee</option>
					<option value="manager">Manager</option>
				</select>
				<!-- <button type="submit" class="btn btn-lg btn-success btn-block">Login</button> -->
				<a href= <?php echo "$hostServerUrl/public/php/home.php" ?> class="btn btn-lg btn-success btn-block">Create</a>
			</form>
		</div>
	</div>
</body>
</html>

<?php

$username = $_POST["username"];
$password = $_POST["password"];
$lastname = $_POST["firstname"];
$priority = $_POST["priority"];

$sql = mysqli_connect("localhost", "root", "root", "rostersys");

//query
$query = "INSERT INTO staff values(null, '$username', '$password', '$firstname', '$lastname', \"$priority\")";
$result = mysqli_query($sql, $query);

//if there is an error with the query
if ($result == false) {
	header("Location:NewStaff.php?status=418");
} else {
	header("Location:NewStaff.php?status=200");
}
// [Code] Attribution: Huu Nghia le
?>