package controllers;

import java.util.Map;

import org.jetbrains.annotations.NotNull;

import classes.User;

import java.util.HashMap;

import io.javalin.Javalin;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import utils.HttpUtil;
import utils.ViewModelUtil;

public class LoginController implements Handler {
	public static String URL = "login.html";
	public User user;

	@Override
	public void handle(@NotNull Context context) {
		Map<String, Object> model = ViewModelUtil.baseModel(context);
		context.render(URL, model);
	};

	/* public static Handler loginUpdate = context -> {
		if (context.formParam("username") != null) {
			user.setUsername(context.formParam("username"));
		} else if (context.formParam("username").equals(null)) {
			context.result("Context Result: Login Failed.");
		}

		if (context.formParam("password") != null) {
			user.setPassword(context.formParam("password"));
		} else if (context.formParam("password").equals(null)) {
			context.result("Context Result: Login Failed.");
		}
	}; */
}