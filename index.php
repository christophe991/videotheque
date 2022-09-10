<?php
include_once "include/header_accueil.html";
?>
<div class="m-10  w-1/2 ml-64 ">

  <p>
    Pour repprendre les bases du developpement je me suis entrainner a creer un site de gestion de la base de donnée,
    ceci et tout les jeu video que j'ai jouer, les films et serie regarder.
    Si vous allez plus loin dans la navigation j'affiche des jeux par console et les films
    par genre ainsie que les series.

  </p>


</div>
<?php
include_once "connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$jeu = $bdd->query("SELECT  titre,  description,genre, plateforme FROM jeu limit 4");
$film = $bdd->query("SELECT titre, acteur, resume, genre, duree FROM film limit 4");
$serie = $bdd->query("SELECT titre, acteur,  resume, genre, saison FROM serie limit 4");
?>

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
          <span class="font-bold">Déscription :</span> <?= $jeux["description"]; ?>
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
if (empty($film)) : ?>
  <p>Aucun film en base de donnée</p>
<?php else : ?>
  <?php foreach ($film as $films) : ?>
    <main>
      
      <div class="ml-10 mt-10  ">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm  ">
        
        
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 font-bold"> <?= $films["titre"]; ?></h5>
          <hr>
          <div class="text-gray-700 text-base mb-4 mt-5 h-40 ">
          <span class="font-bold">Résumé :</span> <?= $films["resume"]; ?>
          </div>
          <div class="text-gray-700 text-base mb-4 genre  "><span class="font-bold">Acteur :</span> <?= $films["acteur"]; ?></div>
          <div class="text-gray-700 text-base mb-4 categorie">
          <span class="font-bold">Genre :</span> <?= $films["genre"]; ?>
          </div>
          <div class="info"><span class="font-bold">Durée :</span><?= $films["duree"]; ?></div>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>










<?php
include_once "include/footer_accueil.html";
?>