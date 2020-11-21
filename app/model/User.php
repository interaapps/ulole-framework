<?php
namespace app\model;

use de\interaapps\ulole\core\traits\JSONModel;
use de\interaapps\ulole\orm\ORMModel;

class User {
    
    use ORMModel; 
    use JSONModel; // Adds $user->json() and User::fromJson("{...}")

    protected $ormSettings = [
        'identifier' => 'id'
    ];
    
    public $id,
           $name;
}