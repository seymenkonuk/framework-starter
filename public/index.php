<?php
// ============================================================================
// File:    index.php
// Author:  Recep Seymen Konuk <konukrecepseymen@gmail.com>
//
// Licensed under the terms of the LICENSE file in the project root directory.
// ============================================================================

require_once(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR .  "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

use Seymenkonuk\Framework\Application;
use Seymenkonuk\Framework\Http\Request\Request;
use Seymenkonuk\Framework\Http\Response\IResponse;

$app = new Application();
$router = $app->router();

$router->get("/", function (IResponse $response): IResponse {
    return $response->html("<h1>Hello, Framework!</h1>");
});

$app->run(Request::capture());
