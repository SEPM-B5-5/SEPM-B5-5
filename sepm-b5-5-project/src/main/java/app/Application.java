package app;

import controllers.workshiftRoster.*;
import controllers.IndexController;
import controllers.LoginController;
import controllers.LoginRedirectController;
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
			conf.addStaticFiles("/web/html/");
			conf.registerPlugin(new RouteOverviewPlugin("/help/routes"));
		}).start(8080);

		route(app);
    }

	public static void route(Javalin app) {

    	app.get(LoginController.URL, new LoginController());
//		app.get(LoginRedirectController.URL, new LoginRedirectController());

		app.get(IndexController.URL, new IndexController());

		app.get("/RosterAndAllocate", (Handler) new WorkshiftRosterController());
		app.get("/RosterAndAllocate/:id", new WorkshiftRosterUpdateController());
	}
}
