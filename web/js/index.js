const widthOfBrowserWindowSize = screen.width
const heightOfBrowserWindowSize = screen.height

let mDateInheritor = new Date()
let daysDatum = mDateInheritor.getDay()
let monthsDatum = mDateInheritor.getMonth()

let daysOfTheWeek = new Array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')

let tableCellSizes = numberDaysInMonth()

function numberDaysInMonth() {
	return 32 - mDateInheritor.getDate()
}

const main = {
	init() {
		// TODO
		const dataTables = $('#hrm-timetable-detailer').DataTable({
			data: dataJsonShifts,
			columns: [
				{title: 'Day'},
			],
			rows: [
				{title: 'Time'}
			]
		})
	}
}