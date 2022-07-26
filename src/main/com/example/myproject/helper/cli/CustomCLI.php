<?php
namespace com\example\myproject\helper\cli;

use de\interaapps\ulole\core\cli\CLI;
use de\interaapps\ulole\core\cli\CLIHandler;
use de\interaapps\ulole\core\cli\Colors;

class CustomCLI extends CLIHandler {
    public function registerCommands(CLI $cli){
        $cli->register("test", function($args){
            Colors::info("This is an example :) ".(isset($args[2]) ? $args[2] : "Arg not set") /* STARTING POINT (first argument) */);
        });
    }
}