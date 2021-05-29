package utils;

import java.util.Map;
import java.util.HashMap;

import data.PriorityData;
import io.javalin.http.Context;

public class ViewModelUtil {

	public static Map<String, Object> baseModel(Context context) {
		Map<String, Object> model = new HashMap<>();

		//Looks for string value (cookie) - looks for if user is logged in
		//Doesn't work, no cookie being set.
		model.put("user", context.sessionAttribute("username"));
		model.put("user_logged_in", (PriorityData.VISITOR == PriorityData.STAFF_MEMBER ? false : true));
		return model;
	}
}