<?php
    namespace Db\Database;

   abstract class Conexao{

    private static $conn;
    
    public static function getConn(){
        if (!self::$conn){

            self::$conn = new \PDO('mysql:host=localhost; dbname=web_db;', 'root', '');
        }

        return self::$conn;
    }

    }