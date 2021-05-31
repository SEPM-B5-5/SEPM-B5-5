<?php ?>

<!-- Doctype and HTML declarations are from https://www.w3schools.com/tags/tag_doctype.asp-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="bitnami.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>Create shifts | ROSTERY </title>
</head>

<body>
    <?php include 'nav-admin.php'?>
    
    
    <div class="container" style="margin-top:2em;">
        <div class="jumbotron">
        <h1 class = "display-4">Create a shift</h1>
        <p class="lead">Please fill out the form below to create a shift</p>
        <hr class="my-4">
        <p>Once a shift has been created you can view all shifts, or assign one to a staff member, by clicking <span><a href="allocate_shifts.php">here</a></span>.</p>
    </div>     

<div style="padding-bottom:4em; border-bottom: thin gainsboro solid;">
    <form action="create_shift.php" id="createShiftForm" method="POST">
    <div class="row">
    
    <!-- Column One -->
        <div class="col">    
            <div class="form-group">
                <label for="startTime">Shift Start Time</label>
                <input type="time" class="form-control" id="startTime" aria-describedby="shiftTimeHelp" name="startTime" required>
                <small id="shiftTimeHelp" class="form-text text-muted">Enter shifts start time (Including AM/PM).</small>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="E.g. Docklands" required>
            </div>

<div>
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'created') {
            echo ("<p style='color:green;'>New shift created</p>");
        } else {
            echo ("<p style='color:red;'>Shift creation failed.</p>");
        }
    }
    ?>
</div>
        </div>
    



    <!-- Column 2 -->
        <div class="col">

            <div class="form-group">
                <label for="endTime">Shift end time</label>
                <input type="time" class="form-control" id="endTime" aria-describedby="shiftEndHelp" name="endTime" required>
                <small id="shiftEndHelp" class="form-text text-muted">Enter the shifts end time (including AM/PM).</small>
            </div>

            <div class="form-group">
            <label for="shiftDay">Select a day</label>
                <select class="custom-select" id="shiftDay" name="shiftDay" required>
                    <option value="">--</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>

            <button class="btn btn-primary" type="submit" style="float:right; margin-top:2em;">Create shift</button>

        </div> 

    </div>
    </form>
</div>

<!-- -->
 


    </div>
</body>

</html>