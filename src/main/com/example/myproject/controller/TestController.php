<?php

namespace com\example\myproject\controller;

use com\example\myproject\model\User;
use de\interaapps\ulole\orm\Query;
use de\interaapps\ulole\router\attributes\Controller;
use de\interaapps\ulole\router\attributes\Route;
use de\interaapps\ulole\router\attributes\With;
use de\interaapps\ulole\router\Request;
use de\interaapps\ulole\router\Response;

#[Controller]
class TestController {
    #[Route("/", method: "GET")]
    public static function index(Request $req, Response $res): string {
        return view("homepage", [
            'name' => "Me",
        ]);
    }

    #[Route("/user/{i+:userId}", method: "GET")]
    #[With("example")]
    public static function getUser(Request $req, Response $res, int $userId): string {
        $user = User::table()
            ->where("id", $userId)
            ->or(fn(Query $q) => $q->where("name", "test"))
            ->first();

        return view("homepage", [
            'name' => ($user === null) ? "Not found" : $user->name ?? "World",
        ]);
    }
}