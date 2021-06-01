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
	header("Location:createaccount.php?status=418");
} else {
	header("Location:createaccount.php?status=200");
}

?>