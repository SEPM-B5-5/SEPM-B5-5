package controllers.workshiftRoster;

import utils.HttpUtil;
import utils.ViewModelUtil;

import io.javalin.core.security.Role;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

import java.util.Map;

import static utils.HttpUtil.attrWorkshiftRoster;

public class WorkshiftRosterController {
	public static String URL = "html/roster.html";

	public static Handler rosterRetval = context -> {
		Map<String, Object> model = ViewModelUtil.baseModel(context);
		model.put("workshiftRoster", attrWorkshiftRoster(context));
		context.render(URL, model);
	};
}