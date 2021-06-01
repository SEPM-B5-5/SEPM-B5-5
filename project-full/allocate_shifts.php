<?php 
// // Get necessary shift info from DB

// $dbQuery="SELECT * FROM shift_list;";
// $results= mysqli_query($dbConnection, $dbQuery);
// $row_count=mysqli_num_rows($results);
// $row_users = mysqli_fetch_array($results);



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
    <title>Allocate shifts | ROSTERY - ADMIN</title>
</head>


<body>
<?php include 'nav-admin.php'?>

<div class="container" style="margin-top:2em;">

    <div class="jumbotron">
        <h1 class = "display-4">Allocate shifts</h1>
        <hr class="my-4">
        <p>Allocate a shift to a staff member by selecting their ID and the desired shift to allocate them to.</p>
    </div>

    <div style="padding-bottom:4em; border-bottom: thin gainsboro solid;">
        <form action="allocateshift_process.php" method="POST" id="allocateShiftForm">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <!-- Populate a selection with values from the database-->
                        <!-- DAY | START-TIME | END-TIME | LOCATION  -->
                        <?php
                            $dbConnection=mysqli_connect("localhost","root","","rostery");

                            // $x=1;     

                            $countQuery="SELECT shiftID FROM shift_list;";
                            if($result = mysqli_query($dbConnection, $countQuery)) {
                                $rowCount= mysqli_num_rows($result);
                            }

                            echo '<label for="selectShift">Select a shift to allocate</label>';
                            echo '<select class="custom-select" name="selectShift" id="selectShift" aria-describedby="shiftAllocateHelp">';
                            echo '<option value="">--</option>';
                            
                            for($x=1; $x <= $rowCount; $x++) {
                                $query = "SELECT * FROM shift_list WHERE shiftID = $x";
                                $result = mysqli_query($dbConnection, $query);
                                $row = mysqli_fetch_array($result, MYSQLI_BOTH);

                                echo '<option value="'.$x.'">'. ("$row[shiftDay]"). '   |   '. ("$row[startTime]"). '   |   '.("$row[endTime]"). '   |   '.("$row[shiftLocation]") .'</option>';
                            }
                            
                            echo '</select>';
                            echo '<small id="shiftAllocateHelp" class="form-text text-muted">Shift Day | Start Time | End Time | Location</small>';

                        ?>
                    </div>
<?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'allocated') {
            echo ("<p style='color:green;'>Shift successfully allocated</p>");
        } else {
            echo ("<p style='color:red;'>Shift allocation failed.</p>");
        }
    }
?>
                </div>
                
                <div class="col">
                    <div class="form-group">
                        <?php 
                            $dbConnection=mysqli_connect("localhost","root","","rostery");

                            $countQuery="SELECT employeeID FROM employees;";
                            if($result = mysqli_query($dbConnection, $countQuery)) {
                                $rowCount= mysqli_num_rows($result);
                            }


                            echo '<label for="select-employee">Select an employee to allocate</label>';
                            echo '<select class="custom-select" name="selectEmployee" id="selectEmployee" aria-describedby="employeeAllocateHelp">';
                            echo '<option value="">--</option>';
                            
                            for($x=1; $x <= $rowCount; $x++) {
                                $query = "SELECT * FROM employees WHERE employeeID = $x";
                                $result = mysqli_query($dbConnection, $query);
                                $row = mysqli_fetch_array($result, MYSQLI_BOTH);

                                echo '<option value="'.$x.'">'. ("$row[employeeID]"). '   |   '. ("$row[firstname]"). " " .("$row[lastname]"). '   |   '.("$row[role]") .'</option>';
                            }
                            


                            echo '</select>';
                            echo '<small id="employeeAllocateHelp" class="form-text text-muted">Employee ID | Full name | Role</small>';
                        ?>
                    </div>

                    <button class="btn btn-primary" type="submit" style="float:right; margin-top:2em;">Allocate shift</button>

                        

                

            </div>



        </form>
    </div>


</div>    





</body>


</html>