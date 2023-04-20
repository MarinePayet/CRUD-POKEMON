<?php
require 'DataBase.php';
include 'Pokemon.php';
include 'header.php';
include 'footer.php';
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



