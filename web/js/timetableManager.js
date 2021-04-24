import * as ddd3 from 'd3'
import { format } from 'd3'
import * as nodejsddd3dom from 'jsdom'

const widthOfBrowserWindowSize = screen.width
const heightOfBrowserWindowSize = screen.height

let mDateInheritor = new Date()
let daysDatum = mDateInheritor.getDay()
let monthsDatum = mDateInheritor.getMonth()

let daysOfTheWeek = new Array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')

let periodicalCellularColumn = new Array() /* TODO(Daniel): get element of time start options */

let tableCellSizes = numberDaysInMonth()

function numberDaysInMonth() {
	return 32 - mDate.getDate()
}

class TimetableIcicle {
	dddVectorGraphics = ddd3.create('svg').attr('viewBox', [0, 0, widthOfBrowserWindowSize, heightOfBrowserWindowSize * numberDaysInMonth()])

	dataCellularOfTimetable = dddVectorGraphics.selectAll('g').data(daysOfTheWeek).join('g').attr('transform', (n) => `translate(${widthOfBrowserWindowSize}, ${heightOfBrowserWindowSize*n+tableCellSizes*1.0})`)

	textOfDataCellular = dataCellularOfTimetable.filter().append('text').attr(computeWidthOfCellSize()/* TODO */).attr(computeHeightOfCellSize()/* TODO */)

	setDataCellular() {
		this.dataCellularOfTimetable.append('rect').attr(widthOfBrowserWindowSize).attr(heightOfBrowserWindowSize)
		this.dataCellularOfTimetable.append('title').text(format(cellularDataValue.value))
	}

	setTextofDataCellular() {
		this.textOfDataCellular.append('tspan').text(staffMemberAccount.name)

		this.textOfDataCellular.text(format(cellularDataValue.value/* TODO */))
	}

	getDddVectorGraphicsNode() {
		return this.dddVectorGraphics.node()
	}
}

let jsonShiftCellDataInput = new File('../data/json/shifts.json')

class ShiftCellularTableDatum {
	mShiftCellData = JSON.stringify(jsonShiftCellDataInput)

	pairShiftData() {
		return ddd3.pairs(this.mShiftCellData, ({x, y}) => {
			return {date: x, time: y}
		})
	}
}

function allocateWorkingShift() {
	let workingDatumCellular = document.getElementById('shiftAllocatedDatacell')
	let days = daysOfTheWeek.length
	/* for loop: insertCell ranging in daysOfTheWeek.length */
	for (let i=0; i < days.length; i++)
		workingDatumCellular.insertCell(i)
	/*  */
	workingDatumCellular = document.getElementById('#hrm-timetable-detailer').innerHTML
}

function removeWorkingShift() {
	let workingDatumCellular = document.getElementById('shiftAllocatedDatacell')
	let days = daysOfTheWeek.length
	/* for loop: insertCell ranging in daysOfTheWeek.length */
	for (let i=0; i < days; i++)
		workingDatumCellular.deleteCell(i)
}