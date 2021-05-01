package hrm.controllers.workshiftRoster;

import utils.HttpUtil;
import utils.ViewModelUtil;

import io.javalin.core.security.Role;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

public class WorkshiftRosterUpdateController implements Handler {
	private static String WorkshiftRosterTableCell = "currentCellIndex";

	public static Handler rosterRetval = context -> {
		

		static Map<String, Object> model = ViewModelUtil.baseModel(context);
		model.put("", attrWorkshiftRoster(context));
		context.render(URL, model);
	};
}