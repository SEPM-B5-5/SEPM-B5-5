package b55.util;

import io.javalin.http.Context;

public class HttpUtil {
	public static String getResourcePage(Context context) {
		return context.queryParam("resource");
	}

	public static String attrSessionLogin(Context context) {
		String session = context.sessionAttribute("sessionLogin");
		context.sessionAttribute("sessionLogin", null);
		return session;
	}

	public static String attrWorkshiftRoster(Context context) {
		String roster = context.sessionAttribute("workshiftRoster");
		context.sessionAttribute("workshiftRoster", null);
		return roster;
	}
}