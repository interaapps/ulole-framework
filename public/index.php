<?php
/* Close this for php built in error logging -> * /
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**/

use com\example\myproject\App;
use de\interaapps\ulole\core\Environment;

chdir('..');

$production = true;

if (function_exists("php_sapi_name")) {
    if (php_sapi_name() == 'cli-server') {
        $production = false;

        if (file_exists("./public/" . $_SERVER['REQUEST_URI']) && !is_dir("./public/" . $_SERVER['REQUEST_URI'])) 
            return false;
    }
}

// Autoloaders
(require_once "autoload.php")();
if (file_exists('vendor/autoload.php'))
   require_once "vendor/autoload.php";

// Running application

require_once "src/main/com/example/myproject/helper/helper.php";
App::main(Environment::fromCurrent()->setProduction($production));