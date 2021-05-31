<?php
session_start();

// This should be changed to be dynamic!
$_SESSION['staffID'] = "2";

?>

<!-- Doctype and HTML declarations are from https://www.w3schools.com/tags/tag_doctype.asp-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="bitnami.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>Past shifts | ROSTERY </title>

    <style>
        .container-borders {
            border: thin gainsboro solid;
            border-radius: 6px;
            padding: .5em;
        }
    </style>

</head>

<body>
    <?php include 'nav.php' ?>

    <div class="container" style="margin-top:2em;">
        <div class="jumbotron">
            <h1 class="display-4">View previous shifts</h1>

            <p class="lead">Below is a list of all <b>completed/rejected</b> allocations</p>
            <hr class="my-4">
            <p>To see upcoming shifts, please click <span><a href="upcoming_shifts.php">here.</a></span></p>
        </div>
    </div>

    <div class="container">
        <div class="form-group">
            <div class="row">
                <div class="col-2">
                </div>

                <div class="col-8 container-borders">

                    <?php
                    //Get the staffID, print out upcoming shift information. 

                    $staffID = $_SESSION['staffID'];
                    $dbConnection = mysqli_connect("localhost", "root", "", "rostery");

                    $query = "SELECT allocationID, shiftID, employeeID, shiftState FROM shift_allocations WHERE employeeID=$staffID AND (shiftState='completed' OR shiftState='rejected')";
                    $qResult = mysqli_query($dbConnection, $query);


                    if (mysqli_num_rows($qResult) > 0) {
                        while ($row = mysqli_fetch_assoc($qResult)) {
                            echo '<form action="chose_shift.php" method="POST">';
                            echo '<div style="padding:1em; border-bottom: thin gainsboro solid;">';
                            echo '<p>Shift state: ' . $row["shiftState"] . '</p>';

                            $var = $row["shiftID"];
                            $shiftQuery = "SELECT shiftDay, startTime, endTime, shiftLocation FROM shift_list WHERE shiftID=$var";
                            $qResultShifts = mysqli_query($dbConnection, $shiftQuery);

                            //Gets the shift information and prints it out.
                            //Hidden inputs are for the POST
                            if (mysqli_num_rows($qResultShifts) > 0) {
                                while ($row = mysqli_fetch_assoc($qResultShifts)) {
                                    echo '<p>Shift Start: ' . $row["startTime"] . '</p>';
                                    echo '<p>Shift End: ' . $row["endTime"] . '</p>';
                                    echo '<p>Shift Location: ' . $row["shiftLocation"] . '</p>';
                                    echo '</div>';
                                    echo '</form>';
                                }
                            }
                        }
                    } else {
                        echo "0 Results";
                    }


                    ?>

                </div>



            </div>
        </div>

    </div>


</body>