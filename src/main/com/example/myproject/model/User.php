<?php
namespace com\example\myproject\model;

use de\interaapps\jsonplus\JSONModel;
use de\interaapps\ulole\orm\ORMHelper;
use de\interaapps\ulole\orm\ORMModel;

class User {
    
    use ORMModel;
    use ORMHelper; // Adds more ORM-Helper like User::all() and User::get(id)
    use JSONModel; // Adds $user->json() and User::fromJson("{...}")

    protected $ormSettings = [
        'identifier' => 'id'
    ];
    
    public $id,
           $name,
           $password,
           $gender,
           $created_at;

    public function setPassword($password){
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
}