package controllers;

import io.javalin.http.Context;
import io.javalin.http.Handler;
import models.User;
import org.jetbrains.annotations.NotNull;
import utils.ViewModelUtil;

import java.util.Map;

public class CreateAccountController implements Handler {
    public static String URL = "/resources/web/html/createaccount.html";
    public User user;

    @Override
    public void handle(@NotNull Context ctx) {
        Map<String, Object> model = ViewModelUtil.baseModel(ctx);
        ctx.render(URL, model);
    }
}