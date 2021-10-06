<?php

// GET /
$base->get("/", function () {
    $controller = new \Controllers\Home;
    return $controller->{'getRequest'}();
});

// POST /
$base->post("/", function () {
    $controller = new \Controllers\Home;
    return $controller->{'postRequest'}();
});

$base->get("/api/endpoint", function () {
    $controller = new \Controllers\Home;
    return $controller->{'apiGetRequest'}();
});

$base->post("/api/endpoint", function () {
    $controller = new \Controllers\Home;
    return $controller->{'apiPostRequest'}();
});
