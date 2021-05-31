<?php

$accept="upcoming_shifts.php?status=accepted";
$reject="upcoming_shifts.php?status=rejected";
$failure="upcoming_shifts.php?status=failure";

$allocationID = $_POST['allocationID'];

//Check if buttons had a value, assigns if so
if(isset($_POST['acceptButton'])) {
    $checkAccept = $_POST['acceptButton'];
} else {
    $checkAccept=null;
}

//These don't actually really work...
// -- Fix these if time allows.
// -- might have fixed
if(isset($_POST['rejectButton'])) {
    $checkReject = $_POST['rejectButton'];
} else {
    $checkReject=null;
}

$dbConnection = mysqli_connect("localhost","root","","rostery");
$dbQueryAccept = "UPDATE shift_allocations SET shiftState = 'accepted' WHERE allocationID = '$allocationID';";
$dbQueryReject = "UPDATE shift_allocations SET shiftState = 'rejected' WHERE allocationID = '$allocationID';";


if ($checkAccept == "accept" && mysqli_query($dbConnection, $dbQueryAccept) != false) {
    header("Location: " .$accept);
} elseif ($checkReject == "reject" && mysqli_query($dbConnection, $dbQueryReject) != false ) {
    header("Location: " .$reject);
} 


?>