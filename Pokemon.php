<?php

class Pokemon
{
    
    public static function listAll(){
        $db = new Database('PokemonCrud');
        $pokemons = $db->query('SELECT Pokemon.id, pk_name, faiblesse, point_vie, Types.name FROM Pokemon
        LEFT JOIN Types ON Pokemon.type_id = Types.id');

        foreach($pokemons as $pokemon){ ?>
        <tbody>
            <tr>
                <td><?php echo $pokemon['id'];?></td>
                <td><?php echo $pokemon['pk_name'];?></td>
                <td><?php echo strtoupper($pokemon['name']);?></td>
                <td><a href="detail.php?id=<?php echo $pokemon['id'] ?>">En voir plus</a> </td>
            </tr>  

        <?php }      
    }

    
    public static function showOne(){
        $pokemonId = $_GET['id'];
        $db = new Database('PokemonCrud');
        $pokemonId = $db->query('SELECT Pokemon.id, pk_name, faiblesse, point_vie, Types.name as type, AttaquesSpeciales.name, AttaquesBasiques.name AS att_bas FROM Pokemon
            LEFT JOIN Types ON Pokemon.type_id = Types.id
            LEFT JOIN AttaquesSpeciales ON Pokemon.attaque_speciale_id = AttaquesSpeciales.id
            LEFT JOIN AttaquesBasiques ON Pokemon.attaque_basique_id = AttaquesBasiques.id
            WHERE Pokemon.id=' . $pokemonId);
        foreach($pokemonId as $detail) { ?>
            
            <tbody>
                <tr>
                    <td><?= $detail['pk_name'] ?></td>
                    <td><?= strtoupper($detail['type'])?></td>
                    <td><?= strtoupper($detail['faiblesse'])?></td>
                    <td><?= $detail['point_vie']?></td>
                    <td><?= $detail['name']?></td>
                    <td><?= $detail['att_bas']?></td>
                </tr>
            </tbody>
        </table>        
        <?php }

    }



}

