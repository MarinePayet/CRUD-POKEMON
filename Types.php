<?php

class Types
{
    private $name;

    public function getName($name){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public static function newType(){
        if (isset($_POST['typeName'])) {
            try {
                $db = new PDO('mysql:host=localhost; dbname=PokemonCrud', 'root', '');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $typeName = trim($_POST['typeName']);
                $query = 'INSERT INTO Types (name) VALUES (:typeName)';
        
                $statement = $db->prepare($query);
                $statement->bindValue(':typeName', $typeName, PDO::PARAM_STR);
                $statement->execute();
        
                // $types = $statement->fetchAll(PDO::FETCH_ASSOC);
                echo "Nouveau type " . $_POST['typeName'] . " inséré !";

            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }        






    }


}

