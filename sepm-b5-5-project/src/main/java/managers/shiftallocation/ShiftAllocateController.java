package hrm.managers.shiftallocation;

import utils.HttpUtil;
import utils.ViewModelUtil;

import java.util.Map;
import java.util.HashMap;

import io.javalin.Javalin;
import io.javalin.http.Handler;

public class ShiftAllocateController {
	public static Handler shiftAlloc = context -> {
		static Map<String, Object> model = new ViewUtil.baseModel(context);
		model.put("/allocator", attrShiftAllocation(context));
		context.render("/resources/html/allocator.html", model);
	};
}