<?php

namespace ToDoList\System\Database;
use PDO;
use PDOException;

final class Connection
{
    public static function connection(): PDO
    {
        $db_config = (object) DATA_BASE_CONFIG;
        try {
            return new PDO(
                "{$db_config->driver}:host={$db_config->host};dbname={$db_config->dbname}",
                $db_config->username,
                $db_config->password,
                $db_config->options
            );
        } catch (PDOException $e) {
            if (DEBUG) {
                die('Error: ' . $e->getMessage());
            }
        }
    }
}