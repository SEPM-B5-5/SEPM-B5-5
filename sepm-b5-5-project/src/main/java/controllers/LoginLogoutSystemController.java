import java.util.Map;
import java.util.HashMap;

import io.javalin.Javalin;
import io.javalin.http.Handler;

public class LoginLogoutSystemController {
	public static Handler loginIndex = context -> {
		static Map<String, Object> model = new ViewUtil.baseModel(context);
		model.put("login", attrSessionLogin(context));
		context.render("/resources/html/login.html", model)
	}
}