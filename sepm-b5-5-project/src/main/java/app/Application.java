package app;


import controllers.CreateAccountController;
import controllers.LoginVerifyController;
import controllers.workshiftRoster.*;
import controllers.LoginController;
import controllers.HomeController;
import io.javalin.http.Handler;

import io.javalin.Javalin;
import io.javalin.core.util.RouteOverviewPlugin;

import static io.javalin.apibuilder.ApiBuilder.before;

public class Application {

    public static void main(String[] args) {
        Javalin app = Javalin.create(conf -> {
			conf.enableDevLogging();
        	conf.addStaticFiles("/web/html/");
			conf.registerPlugin(new RouteOverviewPlugin("/help/routes"));
		}).start(8080);

		route(app);
    }

	public static void route(Javalin app) {

		app.get(LoginController.URL, new LoginController());
		app.get(HomeController.URL, new HomeController());
//		app.get(LoginRedirectController.URL, new LoginRedirectController());
		app.get(CreateAccountController.URL, new CreateAccountController());

		app.get("/RosterAndAllocate", (Handler) new WorkshiftRosterController());
		app.get("/RosterAndAllocate/:id", new WorkshiftRosterUpdateController());


		app.post("/login", new LoginVerifyController());
	}
}
