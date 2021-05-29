package controllers;

import models.User;
import utils.ViewModelUtil;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

import java.util.Map;

public class LoginController implements Handler {
	public static final String URL = "/resources/web/html/index.html";
	public static User user;

	@Override
	public void handle(@NotNull Context context) throws Exception {
		Map<String, Object> model = ViewModelUtil.baseModel(context);
		context.render(URL, model);
	}

//	public static Handler loginVerify() {
//
//	}

	public static Handler loginUpdate = context -> {
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
	};

}