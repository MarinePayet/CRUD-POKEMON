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
                <td><a href="create.php">Nouveau Pokemon</a> </td>
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



    public static function newPokemon(){
        if (isset($_POST['pk_name']) OR isset($_POST['type']) OR isset($_POST['att_base']) OR isset($_POST['att_spe']) OR isset($_POST['faiblesse']) OR isset($_POST['point_vie'])){
            try {
                $db = new PDO('mysql:host=localhost; dbname=PokemonCrud', 'root', '');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $pk_name = trim($_POST['pk_name']);
                $type = trim($_POST['type']);
                $att_base = trim($_POST['att_base']);
                $att_spe = trim($_POST['att_spe']);
                $faiblesse = trim($_POST['faiblesse']);
                $point_vie = trim($_POST['point_vie']);

                $query = 'INSERT INTO Pokemon (pk_name, type_id, attaque_basique_id, attaque_speciale_id, faiblesse, point_vie) 
                    VALUES (:pk_name, :type, :att_base, :att_spe, :faiblesse, :point_vie)';
        
                $statement = $db->prepare($query);
                $statement->bindValue(':pk_name', $pk_name, PDO::PARAM_STR);
                $statement->bindValue(':type', $type, PDO::PARAM_STR);
                $statement->bindValue(':att_base', $att_base, PDO::PARAM_STR);
                $statement->bindValue(':att_spe', $att_spe, PDO::PARAM_STR);
                $statement->bindValue(':faiblesse', $faiblesse, PDO::PARAM_STR);
                $statement->bindValue(':point_vie', $point_vie, PDO::PARAM_INT);
                $statement->execute();
        
                echo "Nouveau type " . $_POST['pk_name'] . " inséré !";

            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }        






    }



}

