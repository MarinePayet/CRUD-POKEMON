<?php

class DataBase 
{
    public static function getConnection()
    {
        $db = 'mysql:host=localhost; dbname=PokmonCrud';
        $userDB = 'root';
        $passDB = '';
        try {
            $pdo = new PDO($db, $userDB, $passDB);
        }
        catch (PDOException $pe){
            if(ENV === 'test'){
                echo $pe->getMessage();
            } else {
                header('error.php');
            }
        }
        return $pdo;
    }
    public static function bind(string $sql, array $data):void
    {
        $stmt = (Database::getConnection())->prepare($sql);
        foreach($data as $key=>$param){
            $stmt->bindValue($key, $param, PDO::PARAM_STR);
        }
        $stmt -> execute();
    }

}