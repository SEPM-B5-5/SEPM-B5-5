package hrm.controllers.workshiftRoster;

import utils.HttpUtil;
import utils.ViewModelUtil;
import hrm.classes.User;

import io.javalin.core.security.Role;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

public class WorkshiftRosterUpdateController implements Handler {
	private static String WorkshiftRosterTableCell = "currentCellIndex";
	User mUser = context.sessionAttribute(USER_KEY);
	String sessionAttrUsername = context.sessionAttribute(USERNAME);
	String sessionAttrPassword = context.sessionAttribute(PASSWORD);

	public static Handler rosterRetval = context -> {
		static Map<String, Object> model = ViewModelUtil.baseModel(context);
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
}