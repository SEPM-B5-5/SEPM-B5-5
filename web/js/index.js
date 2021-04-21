import 'http' // Import NodeJS files here

class HrmTable {
	mHrmTable = document.getElementById("hrmTable");
// TODO(Daniel): index with `data-content` values checked cells with user input.
	mHrmTableBodyRow = hrmTable.rows;
	mHrmTableBodyCells = hrmTable.cells;

	constructor(hrmTable) {
		this.mHrmTable = hrmTable;
	}

	static fetchHrmTable() {
		return this.mHrmTable;
	}

	static fetchRowsRefersHrmTable() {
		return this.mHrmTableBodyRow;
	}

	static fetchCellsRefersHrmTable() {
		return this.mHrmTableBodyCells
	}
}

function checkCell() {
	let index = 0;

	if (cellInRow <= fetchHrmTable().length) {

		/* if (cellInColumn == hrmTableBodyColumn)
			cellInColumn++; */
	} else {
		index++;
	}

	return 0;
}

function indexCell() {
	let index = 0;

	if (index <= fetchRowsRefersHrmTable().length) {
		// TODO
		if(index <= fetchCellsRefersHrmTable().length) {
			//TODO
		}
	} else {
		index++;
	}

	return 0;
}

