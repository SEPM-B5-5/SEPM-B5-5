<?php

// This should be changed to be dynamic!
session_start();
$_SESSION['employeeID'] = "2";

$fullname="";
$email="";
$address="";
$availability="";
$role="";

$dbConnection=mysqli_connect("localhost","root","","rostery");
$dbQuery = "SELECT email, firstname, lastname, availableHours, phone, address, role FROM employees WHERE employeeID = " . $_SESSION['employeeID'] .";";

$qResult = mysqli_query($dbConnection,$dbQuery);

if (mysqli_num_rows($qResult) > 0) {
    while($row = mysqli_fetch_assoc($qResult)) {
        $email = $row['email'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $address = $row['address'];
        $availability = $row['availableHours'] . " Hours per week";
        $role = $row['role'];
        $fullname=$firstname." ".$lastname;
    }
}



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
    <title>Profile | ROSTERY </title>

    <style>
        .card-style {
            border: medium gainsboro solid;
            border-radius: 6px;
            padding: 1em;
        }
    </style>

</head>

<body>

    <?php include 'nav.php' ?>

    <div class="container" style="margin-top:2em;">
        <div class="jumbotron">
            <h1 class="display-4">User Profile</h1> <!-- Put a span in here with the staffID (name) -->
            <hr class="my-4">
            <p>To see your upcoming shifts, click <span><a href="upcoming_shifts.php">here.</a></span></p>
        </div>
    </div>

    <div class="container" style="margin-top:1em;">
        <div class="row">
            <div class="col-3"></div>
            <!-- User information -->
            <div class="col-6 card-style">
                <div>
                    <p>Full name: <?php echo $fullname; ?> </p>
                </div>

                <div>
                    <p>Email Address: <?php echo $email; ?></p>
                </div>

                <div>
                    <p>Home address: <?php echo $address; ?></p>
                </div>

                <div>
                    <p>Availability: <?php echo $availability; ?></p>
                </div>

                <div>
                    <p>Role: <?php echo $role; ?></p>
                </div>


            </div>
            <!-- profile pic or something ? -->
            <div class="col-3"></div>

            



        </div>




    </div>

</body>