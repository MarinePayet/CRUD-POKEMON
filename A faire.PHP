<?php

$pokemons = $db->query('SELECT Pokemon.id, pk_name, faiblesse, point_vie, Types.name, AttaquesSpeciales.name, AttaquesBasiques.name AS att_bas FROM Pokemon
LEFT JOIN Types ON Pokemon.type_id = Types.id
LEFT JOIN AttaquesSpeciales ON Pokemon.attaque_speciale_id = AttaquesSpeciales.id
LEFT JOIN AttaquesBasiques ON Pokemon.attaque_basique_id = AttaquesBasiques.id');



<section >
    <?php 

    $pokemonId = $_GET['id'];

        $db = new Database('PokemonCrud');
        $pokemonId = $db->query('SELECT Pokemon.id, pk_name, faiblesse, point_vie, Types.name as type, AttaquesSpeciales.name, AttaquesBasiques.name AS att_bas FROM Pokemon
        LEFT JOIN Types ON Pokemon.type_id = Types.id
        LEFT JOIN AttaquesSpeciales ON Pokemon.attaque_speciale_id = AttaquesSpeciales.id
        LEFT JOIN AttaquesBasiques ON Pokemon.attaque_basique_id = AttaquesBasiques.id
        WHERE Pokemon.id=' . $pokemonId);

    foreach($pokemonId as $pokemon): ?>
    
        <tbody>
            <tr>
                <td><?= $pokemon['pk_name'] ?></td>
                <td><?= strtoupper($pokemon['type'])?></td>
                <td><?= strtoupper($pokemon['faiblesse'])?></td>
                <td><?= $pokemon['point_vie']?></td>
                <td><?= $pokemon['name']?></td>
                <td><?= $pokemon['att_bas']?></td>
            </tr>
        </tbody>
    </table>
    <?php endforeach;?>