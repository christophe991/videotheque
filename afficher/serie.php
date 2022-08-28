<?php
include_once "../include/header.html";

?>
<?php
include_once "../connexion/connexion_bdd.php";
$serie = $bdd->query("SELECT titre, acteur,  resume, genre, saison FROM serie ");
?>