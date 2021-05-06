package controllers.workshiftRoster;

import utils.*;
import classes.User;

import io.javalin.core.security.Role;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

import java.util.Map;

import static utils.HttpUtil.attrWorkshiftRoster;

public class WorkshiftRosterUpdateController implements Handler {
	private static String WorkshiftRosterTableCell = "currentCellIndex";
	public static String URL = "html/roster.html";

	public static Handler rosterRetval = context -> {
		Map<String, Object> model = ViewModelUtil.baseModel(context);
		model.put("workshiftRoster", attrWorkshiftRoster(context));
		context.render(URL, model);
	};

	public static Handler rosterUpdate = context -> {
		if (context.formParam("username") != null) {
			mUser.setUsername(context.formParam("username"));
		} else if (context.formParam("username").equals(null)) {
			context.getOrNull();
		}

		if (context.formParam("password") != null) {
			mUser.setUsername(context.formParam("password"));
		} else if (context.formParam("password").equals(null)) {
			context.getOrNull();
		}
	};

	@Override
	public void handle(@NotNull Context ctx) throws Exception {
		/*User mUser = context.sessionAttribute(USER_KEY);
		String sessionAttrUsername = context.sessionAttribute(USERNAME);
		String sessionAttrPassword = context.sessionAttribute(PASSWORD);*/
	}
}