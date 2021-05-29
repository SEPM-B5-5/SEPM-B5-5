var $ = require("jquery")
var datatables = require("datatables.net")(window, $)
var datatablesButtons = require( 'datatables.net-buttons/js/buttons.colVis.js' )(windwo, $)

jQuery(function () {
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
})