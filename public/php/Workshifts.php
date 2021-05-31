<!doctype html>
<html lang="en">
<head>
	<?php
		include("./includes/head.php");
	?>
	<title>Roster</title>
</head>

<div class="jumbotron text-center">
	<h1><small>Roster </small>Calendar</h1>
	<p><i>Shift Allocation Form</i></p>
</div>

<a href="home.php" class="btn btn-secondary">Return</a>
<br>

<div class="col-xs-6 col-sm-4">
	<br>
	<h2 id="staff-member-name">Tinsley Mortimer</h2>
	<p>This is the Roster Calendar. <br>
		Input your shift details here.
	</p>
</div>

<body class="container"> <!--This is where the body is at. A comment is here serving as a code line-break-->
<!--Code Line Break!-->
	<?php include("./includes/navbar.php"); ?>
<!--Double Code LINE BREAK!!-->

<table class="table" id="roster-calendar">
	<thead id="days-header-row">
		<tr>
			<th id="adatasort-monday">Name</th>
			<th id="adatasort-tuesday">Days</th>
			<th id="adatasort-wednesday">Hours</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$shiftsJson = file_get_contents("../data/staffWorkshifts.json");
			$shiftsJsonDecoded = json_decode($shiftsJson, true);

			if (count($shiftsJsonDecoded)) {

				echo "<tr id=\"notifs-info\">";

				foreach ($shiftsJsonDecoded as $keys=>$vals) {
					echo "<td id=\"notifs-data\">" . implode("&nbsp|\r\n", $vals) . "</td>";
				}

				echo "</tr>";
			}
		?>
	</tbody>
</table>
<!--T R I P L E Code Line Break!-->
<!--QUADRUPLE Code ... LINE BREAK!!!-->
</body>

<a href="./RosterAndAllocate.php" class="btn btn-xs btn-info">Open Shift Allocator</a>
<!---->
<footer></footer>
</html>