import java.util.Map;
import java.util.HashMap;

import io.javalin.http.Context;
import io.javalin.http.ErrorHandler;

import static hrm.utils.HttpUtil.*;

public class ViewModelUtil {
	public static Map<String, Object> baseModel(Context context) {
		Map<String, Object> model = new HashMap<>();
		model.put("message", new MessageBundle(getResourcePage(context)));
		return model;
	}
}