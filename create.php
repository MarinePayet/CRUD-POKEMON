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
    <?php

    Types::newType();
    
        ?>

</section>

