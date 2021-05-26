package controllers;

import utils.ViewModelUtil;
import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;

import java.util.Map;

public class IndexController implements Handler {
	public static final String URL = "index.html";
	
	@Override
	public void handle(@NotNull Context context) throws Exception {
		Map<String, Object> model = ViewModelUtil.baseModel(context);
		context.render(URL, model);
	}
}