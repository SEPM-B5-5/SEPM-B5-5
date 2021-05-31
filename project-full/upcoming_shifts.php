<?php
    session_start();

    // This should be changed to be dynamic!
    $_SESSION['staffID']="2";
 

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
    <title>Upcoming Shifts | ROSTERY </title>
</head>

<body>
    <?php include 'nav.php'?>

    <div class="container" style="margin-top:2em;">
        <div class="jumbotron">
            <h1 class = "display-4">View upcoming shifts</h1>
            
            <p class="lead">Below is a list of all upcoming shifts</p>
            <hr class="my-4">
            <p>To accept a shift, click the button labeled "accept". To reject, click the button labeled "reject".</p>
        </div>


        <div class = "container" id="ushiftTemplateContainer" style="margin-top:1em; padding-bottom:4em; border-bottom: thin gainsboro solid;">
                <?php
                    include 'ushift_template.php';
                ?>        
        </div>
        
    </div>
</body>