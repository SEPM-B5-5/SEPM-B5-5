package hrm.controllers.workshiftRoster;

import utils.HttpUtil;
import utils.ViewModelUtil;

import io.javalin.core.security.Role;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

public class WorkshiftRosterController {
	public static String URL = "/resources/html/roster.html";

	public static Handler rosterRetval = context -> {
		static Map<String, Object> model = ViewModelUtil.baseModel(context);
		model.put("roster", attrWorkshiftRoster(context));
		context.render(URL, model);
	};
}