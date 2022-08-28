<?php
include_once "../include/header_accueil.html";
?>
<?php
include_once "../../GestionBDD/connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$jeu = $bdd->query("SELECT img,  titre,  description,genre, plateforme FROM jeu where plateforme = \"Xbox one\";");
?>
<?php
if (empty($jeu)) : ?>
  <p>Aucun jeu en base de donnée</p>
<?php else : ?>
  <?php foreach ($jeu as $jeux) : ?>
    <main>
      
      <div class="ml-10 mt-10  ">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm hauteur  ">
        
        
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2"> <?= $jeux["titre"]; ?></h5>
          <hr>
          <p class="text-gray-700 text-base mb-4 resume">
            Déscription : <?= $jeux["description"]; ?>
          </p>
          <p class="text-gray-700 text-base mb-4 genre">Genre : <?= $jeux["genre"]; ?></p>
          <p class="text-gray-700 text-base mb-4 categorie">
            Plate-forme : <?= $jeux["plateforme"]; ?>
          </p>
          <p class="info"></p>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>