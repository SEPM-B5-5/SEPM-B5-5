package hrm.managers.shiftallocation;

import java.util.Map;
import java.util.HashMap;

import io.javalin.Javalin;
import io.javalin.http.Handler;

public class ShiftAllocateController {
	public static Handler shiftAlloc = context -> {
		static Map<String, Object> model = new ViewUtil.baseModel(context);
		model.put("/shifts", attrShiftAllocation(context));
		context.render("/resources/html/shifts.html", model)
	}
}