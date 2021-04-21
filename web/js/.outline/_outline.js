class DocumentModelMap { // This is where we have our own Document Object Model values managed and handled.
	constructor() {}

	static getDashboardCellIds() {
		const cells = document.querySelectorAll('.dashboard-table');
		return Array.from(cells).map((c) => c.dataset.dashboardCellId);
	}

	static replaceRenderedDashboardCells(dashboardCellId, dashboardCellInnerElement) {
		const renderedCell = document.querySelectorAll(dashboardCellId);
		renderedCell.forEach((rc) => {
			const fragment = document.createRange().createContextualFragment(dashboardCellInnerElement);
			rc.replaceWith(fragment);
		})
	}

	static onManagerInputtedValue(rx0) {
		document.addEventListener('click', event => {
			if (!event.target.matches('.dashboard-data-content-mousebutton1-click'))
				return;

			event.preventDefault();
			rx0(event.target.value);
		})
	}

	static onManagerInputtedValue(rx0) {
		document.addEventListener('mouseover', event => {
			if (!event.target.matches('.dashboard-data-content-hover'))
				return;

			event.preventDefault();
			rx0(event.target.value);
		})
	}
}
const documentModelMap = DocumentModelMap;
documentModelMap.getDashboardCellIds = getDashboardCellIds;
documentModelMap.replaceRenderedDashboardCells = replaceRenderedDashboardCells;
export default documentModelMap;
/* <!-- Human Resources Management Manager --> */
class HrmManager {
	constructor() {}

	static readyDashboardCellular(dashboardHeader/*getByElementId('dashboard-header')*/, dashboardCell/*getByElementId('dashboard-cell')*/, {onDashboardUpdate}) {
		let mCellCaching = (cell) => {
			console.debug(cell);
			cellContainer.cacheCell = cell.update;
			onDashboardUpdate(cell);
		}

		return {onDashboardUpdate: mCellCaching};
	}

	static renderDashboardHtm(cell) {
		const dashboardInterfaceCells = document.getElementById("dashboard-interface-cells");
		dashboardInterfaceCells.innerHTML = getDashboardHtml(cell);
	}
}
export default HrmManager;
const hrmManagerDashboard = HrmManager.readyDashboardCellular(dashboardHeader, dashboardCell, {
	onDashboardUpdate: (updateCell) => {documentModelMap.renderDashboardHtml(updateCell)}
});