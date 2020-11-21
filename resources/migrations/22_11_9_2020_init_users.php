<?php
/*
    THIS FEATURE WILL COME SOON
*/
use app\model\User;
use de\interaapps\ulole\orm\Database;

class UsersMigration implements Migration {
    public function up(Database $database){
        $database->create("users", function(Blueprint $blueprint){
            $blueprint->int("id")->ai();
            $blueprint->string("name")->unique();
        });

        // $database->rename("users", "old_users");

        $database->edit("users", function(Blueprint $blueprint){
            
        });
    }

    public function down(Database $database){
        $database->drop("users");
    }
}