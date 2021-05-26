package utils;

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
		String roster = context.sessionAttribute("RosterAndAllocate");
		context.sessionAttribute("RosterAndAllocate", null);
		return roster;
	}

	public static String attrShiftAllocation(Context context) {
		String roster = context.sessionAttribute("shiftAllocation");
		context.sessionAttribute("shiftAllocation", null);
		return roster;
	}
}