package controllers;

import data.PriorityData;

import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

public class LoginRedirectController implements Handler {
	public static final String redirectVal = "index.html";

	@Override
	public void handle(@NotNull Context context) {
		PriorityData priorityData;

		switch(priorityData) {
			case STAFF_MEMBER:
				context.redirect("index.html");
				break;
			default:
				context.redirect("RosterAndAllocate.html");
				break;
		}
	}
}