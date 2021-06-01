<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("./includes/head.php"); ?>
	<title>Reset Password</title>
</head>
<body class="container">
	<div class="mx-auto">
		<?php include("./includes/navbar.php"); ?>
		<div class="col-md-4 offset-md-4 text-center">
			<br>
			<img src="../imgs/image222.png" alt="Custom logo by Daniel Surla" width="64" height="64">
			<br> &nbsp;
			<p class="text-sm-left font-italic">Input values if you wish to reset your password</p>
			<form class="form-group"></form>
				<label for="staff-member-password" class="sr-only">Password</label>
				<input type="password" name="password" id="staff-member-password" class="form-control" placeholder="Password" required autofocus>
				<br>

				<a href="./events/success.php" class="btn btn-lg btn-primary btn-block">Reset Password</a>
			</form>
			<br>

			<a href="./home.php" class="btn btn-xs btn-info">Return to Login</a>
		</div>
	</div>
</body>
</html>

<?php
/* 
$staffId = $_SESSION["staffId"];
$password = $_POST["password"];

$sql = mysqli_connect("localhost", "root", "root", "rostersys");
$query = "UPDATE staff SET password = $password where staffId = $staffId";
$retval = mysqli_query($sql, $query);

if ($retval == false)
	header("Location:resetpassword.php?status=418");
else
	header("Location:resetpassword.php?status=200");
 */
?>