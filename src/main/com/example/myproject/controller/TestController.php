<?php
namespace com\example\myproject\controller;

use com\example\myproject\model\User;
use de\interaapps\ulole\router\attributes\Controller;
use de\interaapps\ulole\router\attributes\Route;
use de\interaapps\ulole\router\Request;
use de\interaapps\ulole\router\Response;

#[Controller]
class TestController {
    #[Route("/", method: "GET")]
    public static function test(Request $req, Response $res){
        return view("homepage", [
            'name' => "Me",
        ]);
    }

    #[Route("/user/(\d+)", method: "GET")]
    public static function getUser(Request $req, Response $res, $userId){
        $user = User::table()
            ->where("id", $userId)
            ->or( fn ($q) => $q->where("name", "test") )
            ->get();
        // Query: SELECT * FROM user WHERE `id` = ? OR ( `name` = ? ) LIMIT 1 ;
        
        return view("homepage", [
            'name' => ($user === null) ? "Not found" : $user->name,
        ]);
    }
}