<?php
namespace com\example\myproject\middlewares;

use de\interaapps\ulole\router\interfaces\Middleware;
use de\interaapps\ulole\router\Request;
use de\interaapps\ulole\router\Response;

class ExampleMiddleware implements Middleware {
    public function handle(Request $req, Response $res) : mixed {
        echo "<!-- Hello from Middleware! -->\n";
        return null;
    }
}