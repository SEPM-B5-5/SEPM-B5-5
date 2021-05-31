<?php
//Take variables from allocation POST method
$shiftID=$_POST['selectShift'];
$employeeID=$_POST['selectEmployee'];

//Create form outcome variables
$success="allocate_shifts.php?status=allocated";
$failure="allocate_shifts.php?status=failed";

//DB connection + Query
$dbConnection = mysqli_connect("localhost","root","","rostery");
$dbQuery="INSERT INTO shift_allocations VALUES(null, '$shiftID', '$employeeID', 'upcoming');";

//Goes back to previous page, with associated outcome message

if ($shiftID != "" && $employeeID != "") { 
    if (mysqli_query($dbConnection, $dbQuery) == false) {
        header("Location: " .$failure);
    } else {
        header("Location: " .$success);
    }
} else {
    header("Location: " .$failure);
}

?>