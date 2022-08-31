<?php
include_once "../include/header_film.html";

?>
<?php
include_once "../connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$film = $bdd->query("SELECT titre, acteur, resume, genre, duree FROM film ");
?>
<?php
if (empty($film)) : ?>
  <p>Aucun film en base de donnée</p>
<?php else : ?>
  <?php foreach ($film as $films) : ?>
    <main>
      <div class="ml-10 mt-10  ">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm hauteur  ">
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2"> <?= $films["titre"]; ?></h5>
          <hr>
          <div class="text-gray-700 text-base mb-4 resume">
            Acteurs : <?= $films["acteur"]; ?>
          </div>
          <div class="text-gray-700 text-base mb-4 genre">Résumé : <?= $films["resume"]; ?></div>
          <div class="text-gray-700 text-base mb-4 categorie">
            Genre : <?= $films["genre"]; ?>
          </div>
          <div class="info">Durée (min) : <?= $films["duree"]; ?></p>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>