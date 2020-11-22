<?php
namespace app\controller;

use app\model\User;
use de\interaapps\ulole\views\Views;
use de\interaapps\ulole\router\Request;
use de\interaapps\ulole\router\Response;

class TestController {
    public static function test(Request $req, Response $res){
        return view("homepage", [
            'name' => "Me",
        ]);
    }

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