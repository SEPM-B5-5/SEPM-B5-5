<!DOCTYPE html>
<html lang="en">
<!-- [Code] Attribution: 
// - Daniel Surla -->
<head>
	<?php
		include("./includes/head.php");
	?>
	<title>Home | Board</title>
</head>
<body>
	<?php include("./includes/navbar.php"); ?>
	<main role="main" class="container">
		<div class="d-flex align-items-center p-3 my-3 text-dark bg-secondary rounded box-shadow">
			<div class="mb-0 text-dark lh-100">
				<img src="../imgs/image222.png" alt="Custom logo image by Daniel Surla" class="mr-3" width="32" height="32">
				<h1 class="mb-0 text-dark lh-100">Roster Calendar</h1>
				<p><i>Human Resource Management</i></p>
			</div>
		</div>
		<div class="my-p3 p-3 bg-white rounded box-shadow">
			<span>
				<label for="staff-member-name">
					<div class="media text-justify pt-3">
						<h1 class="media-body pb-3 mb-0 large lh-100">
							<strong class="d-block text-dark" id="staff-member-name">John Doe</strong>
						</h1>
					</div>
				</label>
			</span>

			<table class="table" id="notifs-table">
				<thead id="notifs-header">
					<tr>
						<th id="notifs-date">Date</th>
						<th id="notifs-time">Time</th>
						<th id="notifs-title">Title</th>
						<th id="notifs-msg">Message</th>
					</tr>
				</thead>

				<tbody>
					<?php
						/* $notifsJson = file_get_contents("../data/notifsHub.json");
						$notifsJsonDecoded = json_decode($notifsJson, true);

						if (count($notifsJsonDecoded)) {
							echo "<tr>";

							foreach ($notifsJsonDecoded as $keys=>$vals) {
								echo "<td>". implode("\r\n", $vals) . "</td>";
							}

							echo "</tr>";
						} */

						$mysql = mysqli_connect("localhost", "root", "root", "rostersys");

						$query = "SELECT * FROM notice";
						$result = mysqli_query($mysql, $query);
						$row = mysqli_fetch_array($result);

						echo "<tr>";

						while ($row) {
							echo "<td>" . $row["dateSent"] . "</td>" .
								"<td>" . $row["timeSent"] . "</td>" .
								"<td>" . $row["header"] . "</td>" .
								"<td>" . $row["notification"] . "</td>"
							;
						}

						echo "</tr>";
					?>
				</tbody>
			</table>
			<br>

			<a href="./Workshifts.php" class="btn btn-lg btn-primary btn-block">To Workshifts</a>
		</main>
	</div>
</body>

<footer></footer>
</html>

<!-- <script type="text/javascript" src="../js/HomeController.js"></script> -->
<!-- <script>
$(document).ready(function () {
	var notifsTable = $('#notifs-table').DataTable({
			ordering: true,
			searching: false,
			select: false,

			ajax: "../data/notifsHub.json",
		})

	$('#notifs-table tbody').on('mouseenter', 'tr', function () {
		if ( $(this).hasClass('active') ) {
			$(this).removeClass('active');
		}
		else {
			notifsTable.$('tr.active').removeClass('active');
			$(this).addClass('active');
		}
	})
})
</script> -->