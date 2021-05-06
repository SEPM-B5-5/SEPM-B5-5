package utils;

import java.util.Map;
import java.util.HashMap;

import classes.User;
import io.javalin.http.Context;
import io.javalin.http.ErrorHandler;

import static utils.HttpUtil.attrSessionLogin;
import static utils.HttpUtil.getResourcePage;

public class ViewModelUtil {
	public static Map<String, Object> baseModel(Context context) {
		Map<String, Object> model = new HashMap<>();
		String session = attrSessionLogin(context);
		model.put("sessionLogin", session);
		return model;
	}
}