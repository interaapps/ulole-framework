<?php
namespace resources\migrations;

use de\interaapps\ulole\orm\Database;
use de\interaapps\ulole\orm\migration\Blueprint;
use de\interaapps\ulole\orm\migration\Migration;

/**
 * CHANGED: Created table
 */
class migration_201122_001143_create_user implements Migration {
    public function up(Database $database) {
        return $database->create("users", function (Blueprint $blueprint) {
            $blueprint->id();
            $blueprint->string("name");
            $blueprint->string("password");
            $blueprint->enum("gender", ["FEMALE", "MALE", "OTHER", "NO_ANSWER"])->default('NO_ANSWER');
            $blueprint->timestamp("created_at")->currentTimestamp();
        });
    }

    public function down(Database $database) {
        return $database->drop("users");
        
    }
}