<?php 
require 'MODELS/DataBase.php';
include 'MODELS/Pokemon.php';
include 'MODELS/Types.php';
include 'PARTS/header.php' ;

?>

<section class="container"> 

    <br><br>
    <h1> Créé un nouveau pokémon</h1>
    <br><br><br>
    <?php include 'PARTS/form.php';?>
    <?php Pokemon::newPokemon()?>
    <br><br>
    <h1> Créé un nouveau Type de pokémon</h1>
    <br><br><br>

    <form action="" method="post">
        <label for=""> Quel est le nouveau type</label>
        <input type="text" name="typeName">
        <input class="btn btn-success" type="submit" value="Envoyer">

    </form>
    <?php

    Types::newType();
    
        ?>
        <br><br><br>
        <br><br><br>

</section>







<?php include 'PARTS/footer.php'; ?>