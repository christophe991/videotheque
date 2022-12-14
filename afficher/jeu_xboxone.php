<?php
include_once "../include/header_jeu.html";
?>
<?php
include_once "../../GestionBDD/connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$jeu = $bdd->query("SELECT  titre,  resume,genre, plateforme FROM jeu where plateforme = \"Xbox one\";");
?>
<h4 class="text-center font-bold text-xl  mt-20">Jeux Xbox one</h4>
<?php
if (empty($jeu)) : ?>
  <p>Aucun jeu en base de donnée</p>
<?php else : ?>
  <?php foreach ($jeu as $jeux) : ?>
    <main>
      
    <div class="ml-10 mt-10  ">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm  ">
        
        
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 font-bold"> <?= $jeux["titre"]; ?></h5>
          <hr>
          <div class="text-gray-700 text-base mb-4 mt-5 h-40 ">
          <span class="font-bold">Résumé :</span> <?= $jeux["resume"]; ?>
          </div>
          <div class="text-gray-700 text-base mb-4 genre  "><span class="font-bold">Genre :</span> <?= $jeux["genre"]; ?></div>
          <div class="text-gray-700 text-base mb-4 categorie">
          <span class="font-bold">Plate-forme :</span> <?= $jeux["plateforme"]; ?>
          </div>
          <div class="info"><span class="font-bold"></span></div>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>
<?php
include_once "../include/footer_accueil.html";

?>
