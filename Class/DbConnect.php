<?php

class DbConnect
{
    private static PDO $connection;

    public static function getConnection(): PDO
    {
        if (!isset(static::$connection)) {
            try {
                static::$connection = new PDO(
                    'mysql:host=localhost:8889;dbname=mmorpg;charset=utf8',
                    'root',
                    'root',
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            }catch(Exception $exception){
                echo 'Une erreur est survenue lors de la connexion a la BDD';
                die;
            }
        }
        return static::$connection;
    }



}