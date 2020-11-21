<?php
/* ======================================
     Remove this file if you don't want 
       to initialize the routes here
          Look into App.php::init
   ====================================== */


return function($router){
    $router->get("/", "TestController@test");
    $router->get("/user/(\d+)", "TestController@getUser");
};