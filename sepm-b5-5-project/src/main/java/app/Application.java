package app;

import controllers.workshiftRoster.*;
import controllers.LoginLogoutSystemController;
import io.javalin.http.Handler;
import managers.shiftallocation.*;
import data.PriorityData;
import data.UserData;

import io.javalin.Javalin;
import io.javalin.core.util.RouteOverviewPlugin;
import io.javalin.plugin.rendering.JavalinRenderer;

public class Application {

    public static void main(String[] args) {
        Javalin app = Javalin.create(conf -> {
			conf.addStaticFiles("resources/");
		}).start(7000);
        app.get("/", ctx -> ctx.result("Hello World"));

		JavalinRenderer.register(".html");

		route(app);
    }

	public static void route(Javalin app) {
		app.get("/login", context -> {
			context.render("/html/login.html", utils.viewModelUtil.ViewModelUtil.baseModel(context));
		});

		app.get("/workshiftRoster", (Handler) new WorkshiftRosterController());
		app.get("/workshiftRoster/:id", new WorkshiftRosterUpdateController());
	}
}
