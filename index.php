<?php
require 'DataBase.php';

$db = new Database('PokmonCrud');
$stm = 
$pokemons = $db->query('SELECT Pokemon.id, pk_name, faiblesse, point_vie, Types.name, AttaquesSpeciales.name, AttaquesBasiques.name AS att_bas FROM Pokemon
LEFT JOIN Types ON Pokemon.type_id = Types.id
LEFT JOIN AttaquesSpeciales ON Pokemon.attaque_speciale_id = AttaquesSpeciales.id
LEFT JOIN AttaquesBasiques ON Pokemon.attaque_basique_id = AttaquesBasiques.id');
// var_dump($pokemons);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class='table table-striped table-hover container'>
        <thead>
            <tr>
                <th>Id Pokemon</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Faiblesse</th>
                <th>Point de vie</th>
                <th>Attaque Spéciale</th>
                <th>Attaque Basique</th>
            </tr>
        </thead>
        <?php foreach($pokemons as $pokemon)?>
        <tbody>
            <tr>
                <td><?php echo $pokemon['id']?></td>
                <td><?php echo $pokemon['pk_name']?></td>
                <td><?php echo $pokemon['name']?></td>
                <td><?php echo $pokemon['faiblesse']?></td>
                <td><?php echo $pokemon['point_vie']?></td>
                <td><?php echo $pokemon['name']?></td>
                <td><?php echo $pokemon['att_bas']?></td>

            </tr>


        </tbody>

    </table>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>