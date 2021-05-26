package utils;

import java.util.Map;
import java.util.HashMap;

import classes.User;
import data.PriorityData;
import io.javalin.http.Context;
import io.javalin.http.ErrorHandler;

import static utils.HttpUtil.attrSessionLogin;
import static utils.HttpUtil.getResourcePage;

public class ViewModelUtil {
	public static Map<String, Object> baseModel(Context context) {
		Map<String, Object> model = new HashMap<>();
		model.put("user", context.sessionAttribute("username"));
		model.put("user_logged_in", (PriorityData.VISITOR == PriorityData.STAFF_MEMBER ? false : true));
		return model;
	}
}