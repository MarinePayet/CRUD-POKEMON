1. CREER BDD
2. CREATE POKEMON
3. READ POKEMON => afficher les détails au clique (sur une autre page)
4. UPDATE POKEMON
5. DELETE POKEMON = > cliquer sur le nom et ça le supprime ou UPDATE
6. ajouter une photo
7. Faiblesse et fonction sont les mêmes listes/ MAIS ATTENTION ENREIGSTREMENT DANS BDD
<!-- A AMELIO ==> Faiblesse et types sont la meme liste. Mais on ne peut pas appeler les 2 en meme temps 
        <div class="mb-3">
        <label for="faiblesse" class="form-label">Faiblesse 2</label>
        <select class="form-select" id="faiblesse" name="faiblesse" required>
            <option> Choisi une faiblesse</option>
            <?php optionsList('Types', $db, $pokemon['type_id']); ?>
        </select>
        <?php var_dump($_POST['faiblesse']);?>
    </div>   -->

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


    // CODE CHAT GPT

    <?php DANS CREATE

$db = new Database('PokemonCrud');

// Créez une instance de la classe/model en lui passant la connexion à la base de données
$monModel = new Types($db);

// Insérez des données en appelant la méthode insererDonnees de votre classe/model
$monModel->insererDonnees("Vol");

DANS CLASS TYPES

private $connexion;

    public function __construct($connexion){
        $this->connexion = $connexion;
    }

    public function insererDonnees($nameType) {
        $requete = $this->connexion->prepare("INSERT INTO Types (name) VALUES (:nameType)");
        $requete->bindValue(':nameType', $nameType, \PDO::PARAM_STR);
        $requete->execute();
    }



?>