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
	@Override
	public void handle(@NotNull Context context) throws Exception {
		User user = context.sessionAttribute("username");
		String username = user.getUsername("username");
	}
}