<?php

namespace Core\Database;

class Connection
{
    public static function make($config)
    {
        try {
            return new \PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch(\PDOException $e) {
            die('DB Error: ' . $e->getMessage());
        }
    }
}
