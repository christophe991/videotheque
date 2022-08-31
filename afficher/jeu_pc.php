<?php
include_once "../include/header_accueil.html";
include_once "../connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$jeu = $bdd->query("SELECT titre, description, genre, plateforme FROM jeu where plateforme = \"PC\";");
if(empty($jeu)) : ?>
<p>Aucun jeu en base de donnée</p>
<?php else : ?>
  <?php foreach ($jeu as $jeux) : ?>
    <main>
      
      <div class="ml-10 mt-10  ">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm hauteur  ">
        
        
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2"> <?= $jeux["titre"]; ?></h5>
          <hr>
          <div class="text-gray-700 text-base mb-4 resume">
            Déscription : <?= $jeux["description"]; ?>
          </div>
          <div class="text-gray-700 text-base mb-4 genre">Genre : <?= $jeux["genre"]; ?></div>
          <div class="text-gray-700 text-base mb-4 categorie">
            Plate-forme : <?= $jeux["plateforme"]; ?>
          </div>
          <div class="info"></div>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>