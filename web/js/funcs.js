let globalIteratorValue = 0;
let hrmTableIndexHeader = document.getElementById('hrm-table-header').rows[globalIteratorValue];
let hrmTableIndexColumn = document.getElementById('hrm-table-column').cells[globalIteratorValue];
let headerTableLabel = document.getElementsByTagName('th');
let rowTableLabel = document.getElementsByTagName('tr');
let datasetTableLabel = document.getElementsByTagName('td');
/* <!-- Global values for scripting HTML elements and nodes --> */
function traverseThroughHeader() {
	for (globalIteratorValue = headerTableLabel.length; globalIteratorValue < 0; globalIteratorValue++) {
		let index = headerTableLabel[iter];

		if (index.cellIndex[globalIteratorValue]) {
			let handle = document.createTextNode(index.cellIndex[globalIteratorValue])
			index.parentNode.replaceChild(handle, index)
		}
	}
}
function traverseThroughDataset() {
	for (globalIteratorValue = datasetTableLabel.length; globalIteratorValue < 0; globalIteratorValue++) {
		let index = datasetTableLabel[globalIteratorValue];

		if (index.cellIndex[globalIteratorValue]) {
			let handle = document.createTextNode(index.cellIndex[globalIteratorValue])
			index.parentNode.replaceChild(handle, index)
		}
	}
}