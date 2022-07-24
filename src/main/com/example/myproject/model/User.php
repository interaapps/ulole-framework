<?php
namespace com\example\myproject\model;

use de\interaapps\jsonplus\JSONModel;
use de\interaapps\ulole\orm\attributes\Column;
use de\interaapps\ulole\orm\attributes\Table;
use de\interaapps\ulole\orm\ORMHelper;
use de\interaapps\ulole\orm\ORMModel;

#[Table("users")]
class User {
    use ORMModel;
    use ORMHelper; // Adds more ORM-Helper like User::all() and User::get(id)
    use JSONModel; // Adds $user->json() and User::fromJson("{...}")

    #[Column]
    public int $id;
    #[Column]
    public string $name;
    #[Column]
    public string $password;
    #[Column]
    public string $gender;
    #[Column]
    public string $createdAt;

    public function setPassword($password){
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
}