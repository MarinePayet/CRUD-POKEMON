<?php

require 'MODELS/Database.php';
include 'MODELS/Pokemon.php';
include 'PARTS/header.php' ;

// $db = new Database('PokmonCrud');
// $pokemons = $db->query('SELECT Pokemon.id, pk_name, faiblesse, point_vie, Types.name FROM Pokemon
// LEFT JOIN Types ON Pokemon.type_id = Types.id');

?>



    <table class='table table-striped table-hover container'>
        <thead>
            <tr>
                <th>Id </th>
                <th>Nom</th>
                <th>Type</th>
                <th>En Voir plus</th>
                <th> Ajouter un pokemon </th>
            </tr>
        </thead>
        <?php echo Pokemon::listAll() ?>
    


    </table>



    <a class="container" href="create.php">Ajouter un nouveau Type</a>



    <?php include 'PARTS/footer.php'; ?>








    