<?php 
require 'DataBase.php';
include 'Pokemon.php';
include 'Types.php';
include 'header.php';
include 'footer.php';
?>
<section class="container"> 
    <br><br>
    <h1> Créé un nouveau Type de pokémon</h1>
    <br><br><br>

    <form action="" method="post">
        <label for=""> Quel est le nouveau type</label>
        <input type="text" name="typeName">
        <input class="btn btn-success" type="submit" value="Envoyer">

    </form>
    <?= var_dump($_POST['typeName']);?>
    

    <?php
        if(isset($_POST['typeName'])){
            
            $db = new Database('PokemonCrud');
            $typeName = trim($_POST['typeName']);
            $query = 'INSERT INTO Types (name) VALUES (:typeName)';
            
            $statement = $db->prepare($query);
            
            $statement->bindValue(':firstname', $typeName, \PDO::PARAM_STR);
            
            $statement->execute(); 
            
            $types = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo var_dump($types);
            

            
        }; 

        if(isset($_POST['category'])){
                
            $category = trim($_POST['category']);
            
            $query = 'INSERT INTO category (category) VALUES (:category)';
            
            $statement = $pdo->prepare($query);
            
            $statement->bindValue(':category', $category, \PDO::PARAM_STR);
            
            $statement->execute(); 
            
            $categories = $statement->fetchAll(PDO::FETCH_ASSOC);

            
            header("location: create.php");
            
            }; 










</section>

