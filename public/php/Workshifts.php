<!doctype html>
<html lang="en">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">// JQuery</script>

	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous">// JQuery UI</script>
<!--Getting Started Bootstrap. [online] Available at: "https://getbootstrap.com/docs/3.4/getting-started/#download". [Accessed on: 19/04/21]-->
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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