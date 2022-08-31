<?php
include_once "../include/header_serie.html";

?>
<?php
include_once "../connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root","");
$serie = $bdd->query("SELECT titre, acteur,  resume, genre, saison FROM serie ");
?>
<?php
if (empty($serie)) : ?>
  <p>Aucune serie en base de donnée</p>
<?php else : ?>
  <?php foreach ($serie as $series) : ?>
    <main>
      <div class="ml-10 mt-10  ">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm hauteur  ">
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2"> <?= $series["titre"]; ?></h5>
          <hr>
          <p class="text-gray-700 text-base mb-4 resume">
            Acteurs : <?= $series["acteur"]; ?>
          </p>
          <p class="text-gray-700 text-base mb-4 genre">Résumé : <?= $series["resume"]; ?></p>
          <p class="text-gray-700 text-base mb-4 categorie">
            Genre : <?= $series["genre"]; ?>
          </p>
          <p class="info">Nombre saisons : <?= $series["saison"]; ?></p>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>