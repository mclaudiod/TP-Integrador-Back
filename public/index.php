<?php 

    require_once __DIR__ . '/../includes/app.php';

    use Controllers\IndexController;
    use MVC\Router;

    $router = new Router();

    // Index

    $router->get("/", [IndexController::class, "index"]);
    $router->post("/", [IndexController::class, "index"]);

    // Tickets

    $router->get("/tickets", [IndexController::class, "tickets"]);
    $router->get("/tickets/editar", [IndexController::class, "edit"]);
    $router->post("/tickets/editar", [IndexController::class, "edit"]);
    $router->post("/tickets/borrar", [IndexController::class, "delete"]);

    $router->verifyRoutes();