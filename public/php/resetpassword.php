<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("./includes/head.php"); ?>
	<title>Reset Password</title>
</head>
<body class="container">
	<div class="mx-auto">
		<div class="col-md-4 offset-md-4 text-center">
			<form class="form-group"></form>
				<label for="staff-member-password" class="sr-only">Password</label>
				<input type="password" name="password" id="staff-member-password" class="form-control" placeholder="Password" required autofocus>

				<button type="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
			</form>

			<a href="../index.php" class="btn btn-xs btn-info">Return to Login</a>
		</div>
	</div>
</body>
</html>

<?php

$staffId = $_SESSION["staffId"];
$password = $_POST["password"];

$sql = mysqli_connect("localhost", "root", "root", "rostersys");
$query = "UPDATE staff SET password = $password where staffId = $staffId";
$retval = mysqli_query($sql, $query);

if ($retval == false)
	header("Location:resetpassword.php?status=418");
else
	header("Location:resetpassword.php?status=200");
	


?>