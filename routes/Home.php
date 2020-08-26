<?php

// GET /
$base->get("/", function () {
    $controller = new spark\Controllers\Home;
    return $controller->{'index'}();
});

// POST /
$base->post("/", function () {
    $controller = new spark\Controllers\Home;
    return $controller->{'index'}($_POST);
});
