package controllers;

import java.util.Map;
import java.util.HashMap;

import io.javalin.Javalin;
import io.javalin.http.Handler;
import utils.HttpUtil;
import utils.ViewModelUtil;

import static utils.HttpUtil.attrSessionLogin;

public class LoginLogoutSystemController {
	public static String URL = "/~/web/html/login.html";

	public static Handler loginRetval = context -> {
		Map<String, Object> model = ViewModelUtil.baseModel(context);
		model.put("login", attrSessionLogin(context));
		context.render(URL, model);
	};

	public static Handler loginUpdate = context -> {
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