<?php


// I don't know where the 'use function PHPSTORM_META\map;' came from.
// it just appeared and i'm too scared to delete it.
use function PHPSTORM_META\map;

// Variables from the forms POST
$success="shift_form.php?status=created";
$failure="shift_form.php?status=failure";

$startTime = $_POST['startTime'];
$endTime = $_POST['endTime'];
$shiftDay = $_POST['shiftDay'];
$location = $_POST['location'];

$dbConnection = mysqli_connect("localhost","root","","rostery");
$dbQuery = "INSERT INTO shift_list VALUES(null, '$startTime', '$endTime', '$shiftDay', '$location');";

if (mysqli_query($dbConnection, $dbQuery) == false) {
    header("Location: " .$failure);
} else {
    header("Location: " .$success);
}

?>
