package controllers;

import io.javalin.http.Context;
import io.javalin.http.Handler;
import org.jetbrains.annotations.NotNull;
import utils.ViewModelUtil;

import java.util.Map;

public class LoginVerifyController implements Handler {

    @Override
    public void handle(@NotNull Context ctx) throws Exception {

        //Admin part doesn't work
        if (ctx.formParam("username")=="[admin]" && ctx.formParam("password")=="[admin1234]") {
            ctx.redirect("/admin.html");
        } else if (ctx.formParam("username")!=null && ctx.formParam("password")!=null) {
            ctx.redirect("/home.html");
        }


    }
}
