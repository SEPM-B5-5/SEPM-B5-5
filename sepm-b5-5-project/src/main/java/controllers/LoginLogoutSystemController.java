package controllers;

import java.util.Map;
import java.util.HashMap;

import io.javalin.Javalin;
import io.javalin.http.Handler;
import utils.HttpUtil;
import utils.ViewModelUtil;

import static utils.HttpUtil.attrSessionLogin;

public class LoginLogoutSystemController {
	public static String URL = "html/index.html";

	public static Handler loginRetval = context -> {
		Map<String, Object> model = ViewModelUtil.baseModel(context);
		model.put("login", attrSessionLogin(context));
		context.render(URL, model);
	};
}