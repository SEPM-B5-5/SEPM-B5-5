package managers.shiftallocation;

import utils.HttpUtil;
import utils.ViewModelUtil;

import java.util.Map;
import java.util.HashMap;

import io.javalin.Javalin;
import io.javalin.http.Handler;

import static utils.HttpUtil.attrShiftAllocation;

public class ShiftAllocateController {
	public static Handler shiftAlloc = context -> {
		static Map<String, Object> model = new ViewUtil.baseModel(context);
		model.put("/allocator", attrShiftAllocation(context));
		context.render("html/allocator.html", model);
	};
}