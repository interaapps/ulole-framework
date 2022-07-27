<?php

namespace com\example\myproject\controller;


use com\example\myproject\App;
use com\example\myproject\jobs\ExampleJob;
use de\interaapps\ulole\router\attributes\Controller;
use de\interaapps\ulole\router\attributes\Route;
use de\interaapps\ulole\router\Request;
use de\interaapps\ulole\router\Response;

#[Controller("/jobs")]
class SecondTestController {

    #[Route("/{*:val}", method: "GET")]
    public function useJob(Request $req, Response $res, string $val): string {

        // Job Example
        $example = new ExampleJob($val);
        App::getInstance()->getJobHandler()->push($example);

        return "Hi, Job created!";
    }

}