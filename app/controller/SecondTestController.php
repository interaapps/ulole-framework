<?php
namespace app\controller;


use app\App;
use app\jobs\ExampleJob;
use de\interaapps\ulole\router\attributes\Controller;
use de\interaapps\ulole\router\attributes\Route;
use de\interaapps\ulole\router\Request;
use de\interaapps\ulole\router\Response;

// Requires PHP 8

#[Controller("/jobs")]
class SecondTestController {

    #[Route("/(.*)", method: "GET")]
    public function useJob(Request $req, Response $res, $val) {

        // Job Example
        $example = new ExampleJob($val);
        App::getInstance()->getJobHandler()->push($example);

        return "HI";
    }

}