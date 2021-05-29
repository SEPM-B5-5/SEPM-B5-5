package controllers.workshiftRoster;

import models.User;

import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

public class WorkshiftRosterUpdateController implements Handler {
	User user = new User();

	@Override
	public void handle(@NotNull Context context) throws Exception {
		User user = context.sessionAttribute("username");
		user.setUsername("username");
	}
}