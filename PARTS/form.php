<?php 

    include 'PARTS/header.php' ;
    include 'PARTS/formUtilis.php';
    ?>  

    <form method="post" class="container">
        <!-- SECTION POKEMON NAME -->
    <div class="mb-3">
        <label for="pk_name" class="form-label">Pokemon</label>
        <input type="text" class="form-control" id="pk_name" name="pk_name" required>
        <!-- <?php var_dump($_POST['pk_name']);?> -->
    </div>
        <!-- SECTION TYPE -->
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select class="form-select" id="type" name="type" required>
            <option> Choisi un type</option>
            <?php optionsList('Types', $db, $pokemon['type_id']); ?>
        </select>
        <!-- <?php var_dump($_POST['type']);?> -->
    </div>
        <!-- SECTION ATTAQUE BASIQUE -->
    <div class="mb-3">
        <label for="att_base" class="form-label">Attaque Basique</label>
        <select class="form-select" id="att_base" name="att_base" required>
            <option> Choisi une attaque basique </option>
            <?php optionsList('AttaquesBasiques', $db, $pokemon['attaque_basique_id']); ?> 
        </select>
        <!-- <?php var_dump($_POST['att_base']);?> -->
    </div>
    <!-- SECTION ATTAQUE SPECIALE -->
    <div class="mb-3">
        <label for="att_spe" class="form-label">Attaque Spéciale</label>
        <select class="form-select" id="att_spe" name="att_spe" required>
            <option> Choisi une attaque spéciale </option>
            <?php optionsList('AttaquesSpeciales', $db, $pokemon['attaque_speciale_id']); ?> 
        </select>
        <!-- <?php var_dump($_POST['att_spe']);?> -->
    </div>    
    <!-- SECTION FAIBLESSE -->
    <div class="mb-3">
        <label for="faiblesse" class="form-label">Faiblesse</label>
        <input type="text" class="form-control" id="faiblesse" name="faiblesse" required>
        
        <!-- <?php var_dump($_POST['faiblesse']);?> -->
    </div>
    <!-- SECTION POINT DE VIE -->
    <div class="mb-3">
        <label for="point_vie" class="form-label">Point de Vie</label>
        <input type="number" class="form-control" name="point_vie" id="point_vie" required>
        <!-- <?php var_dump($_POST['point_vie']);?> -->
    </div>
    
        <input type="submit" class="btn btn-primary" value="Save">

    
    
</form>


<?php include 'PARTS/footer.php'; ?>