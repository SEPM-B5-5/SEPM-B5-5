package controllers;

import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

import classes.User;

public class LoginRedirectController implements Handler {

	@Override
	public void handle(@NotNull Context context) {
		User user = new User();

		switch(String.valueOf(user.getPriorityData())) {
			case "STAFF_MEMBER":
				context.redirect("index.html");
				break;
			default:
				context.redirect("RosterAndAllocate.html");
				break;
		}
	}
}