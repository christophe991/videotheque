<?php
include_once "../include/header_film.html";

?>
<?php
include_once "../connexion/connexion_bdd.php";
$film = $bdd->query("SELECT titre, acteur, resume, genre, duree FROM film ");
?>