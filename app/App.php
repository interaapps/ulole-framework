<?php
namespace app;

use app\model\User;
use de\interaapps\ulole\orm\UloleORM;
use de\interaapps\ulole\core\Environment;
use de\interaapps\ulole\core\WebApplication;
use de\interaapps\ulole\core\traits\Singleton;

class App extends WebApplication {
    
    use Singleton;

    public static function main(Environment $environment){    
        self::setInstance( (new self())->start($environment) );
    }

    /**
     * Global init. It'll be used for the web, cli and other places.
     * Handle databases (and other connections), configurations and more here.
     */
    public function init(){
        $this->getConfig()
            // If the file doesn't exists it'll just ignore it without any exception!
            ->loadPHPFile("env.php")    // Uses the returned array in a php file
            ->loadENVFile(".env")       // A simple .env file
            ->loadJSONFile("env.json"); // Using a json file
            
        $this->initDatabase(/*Config prefix*/ "database" /*, "main" (Default) */);
        UloleORM::register("users", User::class);
    }

    /**
     * This'll be called before running the app for the web.
     * Handle routes, views and other stuff needed for running for the web here.
     */
    public function run() {
        $router = $this->getRouter();
        
        $router
            ->get("/a/(.*)", function($req, $res, $test = null){
                $res->json([
                    "Yep" => $test
                ]);
            });

        $router->notFound(function(){
            view("error", ["error" => "Page not found"]);
            // return "Page not found";
        });

        (require_once 'app/routes.php')($router);

    }
}