<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include("./includes/head.php");
	?>
	<title>New Staff</title>
</head>
<body>
	<?php
		include("./includes/navbar.php");
	?>

</body>
</html>

<?php

$username = $_POST["username"];
$password = $_POST["password"];
$lastname = $_POST["firstname"];
$priority = $_POST["employee"];

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