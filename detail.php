<?php
require 'MODELS/DataBase.php';
include 'MODELS/Pokemon.php';
include 'PARTS/header.php' ;

$br = "</br></br>";
?>



<table class='table table-striped table-hover container'>
        <thead>
            <tr>
                <th>Nom du pokemon</th>
                <th>Type</th>
                <th>Faiblesse</th>
                <th>Point de vie</th>
                <th>Attaque Spéciale</th>
                <th>Attaque Basique</th>
            </tr>
        </thead>
<?php echo Pokemon::showOne(); 



include 'PARTS/footer.php'; ?>