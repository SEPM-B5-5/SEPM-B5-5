<?php


?>

<style>
.container-borders {
    border: thin gainsboro solid;
    border-radius: 6px;
    padding: .5em;
}
</style>

<div class="form-group">
    <div class="row">
        <div class ="col-2">         
        </div>
        
        <div class ="col-8 container-borders">
                        
            <?php
                //Get the staffID, print out upcoming shift information. 
                
                $staffID = $_SESSION['staffID'];

                $dbConnection = mysqli_connect("localhost","root","","rostery");
                
                $query="SELECT allocationID, shiftID, employeeID, shiftState FROM shift_allocations WHERE employeeID=$staffID AND shiftState='upcoming'";
                $qResult= mysqli_query($dbConnection, $query);


                
                if (mysqli_num_rows($qResult) > 0) {
                    while($row = mysqli_fetch_assoc($qResult)) {
                        echo '<form action="chose_shift.php" method="POST">';
                        echo '<div style="padding:1em; border-bottom: thin gainsboro solid;">';

                        echo '<p>Shift state: '.$row["shiftState"]. '</p>';
                        echo '<input type="hidden" id="shiftState" value="' .$row["shiftState"] .'">';
                        echo '<input type="hidden" name="allocationID" id="allocationID" value="'.$row["allocationID"] .'">';

                        $var = $row["shiftID"];
                        echo '<input type="hidden" id="shiftID" value="' .$row["shiftID"] .'">';

                        $shiftQuery="SELECT shiftDay, startTime, endTime, shiftLocation FROM shift_list WHERE shiftID=$var";
                        $qResultShifts=mysqli_query($dbConnection, $shiftQuery);
                        
                        //Gets the shift information and prints it out.
                        //Hidden inputs are for the POST
                        if (mysqli_num_rows($qResultShifts) > 0) {
                            while($row=mysqli_fetch_assoc($qResultShifts)) {
                                
                                echo '<p>Shift Start: '.$row["startTime"]. '</p>';
                                echo '<input type="hidden" id="startTime" value="' .$row["startTime"] .'">';

                                echo '<p>Shift End: '.$row["endTime"]. '</p>';
                                echo '<input type="hidden" id="endTime" value="' .$row["endTime"] .'">';

                                echo '<p>Shift Location: '.$row["shiftLocation"]. '</p>';
                                echo '<input type="hidden" id="shiftLocation" value="' .$row["shiftLocation"] .'">';
                                
                                echo '<div class ="container-borders">';
                                echo '<button class="btn btn-success" style="margin:.5em;" name="acceptButton" id="acceptButton" value="accept">Accept</button>';
                                echo '<button class="btn btn-danger" style="margin:.5em;" name="rejectButton" id="rejectButton" value="reject">Reject</button>';
                                echo '</div>';
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