var $ = require("jquery")
var datatables = require("datatables.net")(window, $)
var datatablesButtons = require( 'datatables.net-buttons/js/buttons.colVis.js' )(windwo, $)

jQuery(function () {
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