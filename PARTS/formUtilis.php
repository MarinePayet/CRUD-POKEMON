<?php

function optionsList($tableName, $db, $value) {
    $db = new Database('PokemonCrud');
    $pokemons = $db->query('SELECT * FROM ' .$tableName, PDO::FETCH_ASSOC);

    foreach ($pokemons as $row): ?>
        <option 
            value="<?php echo $row['id']; ?>"
            <?php echo $value == $row['id'] ? 'selected': '' ?>
        >
            <?php echo $row['name']; ?>
        </option>
    <?php endforeach;
}

