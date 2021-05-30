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

<button class="btn btn-sm btn-danger" id="remove-shift-button" name="removeShift" value="removeShiftValue">Remove Shift</button>
<br>
<!-- "JQuery How to add table cell to a table row". [Accessed on: May 29, 2021]. [online] Available at: https://stackoverflow.com/a/24441951 -->
<script type="text/javascript">
$(document).ready(function () {

$("#notifs-info").append(<?php
							foreach ($shiftsJsonDecoded as $keys=>$vals) {
								echo "<td>" .
									"<span id=\"xn-notifs-data\" draggable=\"true\">" .
									"<td id=\"notifs-data\">" . implode("\r\n", $vals) . "</span>" . "</td>";
							}
						?>)

$("#remove-shift-button").click(function () {
	$("#xn-notifs-data").remove()
})

})
</script>

<div class="mx-auto">
	<div class="col-md-4 offset-md-4 text-left">
		<form class="form-group">
			<br>
			<label for="staffMemberName">Time</label>
			<select name="staffMemberName" id="staff-member-name-opts" class="form-control">
				<option value="staffMemberNameValue">John Doe</option>
				<option value="egA1StaffMemberNameValue">Vincenze Dubois</option>
				<option value="egB2StaffMemberNameValue">Daniel David</option>
			</select>

			<label for="days-of-allocation-opts">Day</label>
			<select name="allocatedDay" id="days-of-allocation-opts" class="form-control">
				<option value="Monday">Monday</option>
				<option value="Tuesday">Tuesday</option>
				<option value="Wednesday">Wednesday</option>
				<option value="Thursday">Thursday</option>
				<option value="Friday">Friday</option>
			</select>

			<label for="time-for-staff-opts">Time</label>
			<select name="memberChosenTime" id="time-for-staff-opts" class="form-control">
				<option value="6:00AM-2:00PM">6:00AM-2:00PM</option>
				<option value="9:00AM-5:00PM">9:00AM-5:00PM</option>
				<option value="2:00PM-10:00PM">2:00PM-10:00PM</option>
			</select>
			<br>
			
			<button class="btn btn-sm btn-primary" id="allocate-shift-button" name="allocateShift" value="allocateShiftValue">Allocate Shift</button>
		</form>
	</div>
</div>
<!--T R I P L E Code Line Break!-->
<!--QUADRUPLE Code ... LINE BREAK!!!-->
</body>
<!---->
<footer></footer>
</html>
<!-- "Drag and Drop table cell contents". [Accessed on: May 29, 2021]. [online] Available at: https://stackoverflow.com/a/23472898 -->
<script type="text/javascript"> 
$(document).ready(function () {

$("#xn-notifs-data").on("dragstart", function (data) {
	var d = data.originalEvent.dataTransfer
	d.setData("Text", $(this).attr(id))
})

$("#roster-calendar td").on("dragenter dragover drop", function (data) {
	data.preventDefault()

	if (data.type == "drop") {
		var cell = data.originalEvent.dataTransfer.getData("Text", $(this).attr("id"))

		xn0 = $("#"+data).detach()

		xn0.appendTo($(this))
	}
})

}) // $(document).ready(function (){})
</script>

<!-- <script>
	$(document).ready( function () {
		var rosterCalendar = $('#roster-calendar').DataTable({
			ordering: true,
			searching: false,
			select: true,

			columns: [
				{
					"className": 'details-control',
					"orderable": 'false',
					"data": 'null',
					"defaultContent": ''
				},

				// {"data": "days"}
			],
			
			columnDefs: [
				{targets: [0, 5], searchable: true, visible: true},
			],

			ajax: {
				"url": "../data/staffWorkshifts.json",
				"dataSrc": "tableData"
			}
		})

		var daysHeaderRow = document.getElementById('days-header-row')
		
		var staffMemberName = document.getElementById('staff-member-name-opts')
		var daysOfAllocation = document.getElementById('days-of-allocation-opts')
		var timeForShift = document.getElementById('time-for-shift-opts') // these values can be transformed with JavalinIO's ,,.formParams()'' function.
	
		var inputtedData = {
			staffMemberName : {daysOfAllocation, timeForShift}
		} // have the values act as tuple-like objects to pass into ,,localStorage'' or ,,sessionStorage''
		// push all these other values into a tuple-list or so.
		var userInputtedValues = rosterCalendar.$('input, select').serialize() // <- DataTables API
	
		// var rowIndex = rosterCalendar.row
		var cellIndex = 1
		// shift allocation button for form
		$('#allocate-shift-button').on('click', function () {
			rosterCalendar.row.add([
				cellIndex + inputtedData
			]).draw(false)

			if (cellIndex <= 5)
				cellIndex++
			else if (rowIndex <= 5)
				rowIndex++
			else
				cellIndex = 1
				rowIndex = 1
		})

		$('#allocate-shift-button').click()
		// highlight table body cells
		$('#roster-calendar tbody').on('mouseenter', 'tr', function () {
			$('#roster-calendar tbody').on( 'click', 'tr', function () {
		        if ( $(this).hasClass('active') ) {
		            $(this).removeClass('active');
		        }
		        else {
		            rosterCalendar.$('tr.active').removeClass('active');
		            $(this).addClass('active');
		        }
    		})
		})
		
		$('#remove-shift-button').click(function () {
			rosterCalendar.row('.active').remove().draw(false)
		})
	}); // "How to pass data from one page to another page html", [Accessed on: 13 May 2021], [online] Available at: https://stackoverflow.com/questions/36599781/how-to-pass-data-from-one-page-to-another-page-html?noredirect=1&lq=1
</script> -->

<!-- <script>
function detailExtra(d) {
	return "<tr>\
		<td>Details</td>"+
		"<td>"+ d.days + "&nbsp" + d.time +"</td>"+
	"</tr>"
}
</script> -->

<!-- <script>
$(function () {
// TODO: code ...
$('#roster-calendar tbody').on('click', 'td.details-control', function () {
	var tr = $(this).closest('tr')
	var row = rosterCalendar.row(tr)

	if (row.child.isShown()) {
		row.child.hide()
		tr.removeClass('shown')
	} else {
		row.child(detailExtra(row.data())).show()
		tr.addClass('shown')
	}
})

})
</script> -->