package controllers;

import java.util.Map;

import org.jetbrains.annotations.NotNull;

import models.User;

import io.javalin.http.Context;
import io.javalin.http.Handler;
import utils.ViewModelUtil;

public class HomeController implements Handler {
	public static String URL = "/resources/web/html/home.html";
	public User user;

	@Override
	public void handle(@NotNull Context ctx) {
		Map<String, Object> model = ViewModelUtil.baseModel(ctx);
		ctx.render(URL, model);
	}
}