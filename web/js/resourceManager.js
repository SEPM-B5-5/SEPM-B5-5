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