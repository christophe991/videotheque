<?php
include_once "../include/header_film.html";
?>
<?php
include_once "../connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$film = $bdd->query("SELECT titre, acteur, resume, genre, duree FROM film WHERE genre like  \"%Comedie%\";");
?>
<h4 class="text-center font-bold text-xl  mt-20">Films Comédie</h4>
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
          <div class="text-gray-700 text-base mb-4 genre  "><span class="font-bold">Acteur (trice) :</span> <?= $films["acteur"]; ?></div>
          <div class="text-gray-700 text-base mb-4 categorie">
          <span class="font-bold">Genre :</span> <?= $films["genre"]; ?>
          </div>
          <div class="info"><span class="font-bold">Durée :</span> <?= $films["duree"]; ?> <span> min</span></div>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>
<?php
include_once "../include/footer_accueil.html";

?>