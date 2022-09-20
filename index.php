<?php
include_once "include/header_accueil.html";
?>
<div class="m-10  w-1/2 ml-64 ">

  <p>
  Afin de reprendre les bases en développement, j'ai créé une vidéothèque c'est une partie de mes jeux, films et séries que je possède. 
  Plus tard il aura la même chose en javaFX, ceci est-une premiere étape pour créer un site d'e-commerce.
  </p>


</div>
<?php
include_once "connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$jeu = $bdd->query("SELECT  titre,  resume,genre, plateforme FROM jeu limit 4");
$film = $bdd->query("SELECT titre, acteur, resume, genre, duree FROM film limit 4");
$serie = $bdd->query("SELECT titre, acteur,  resume, genre, saison FROM serie limit 4");
?>
<h4 class="text-center font-bold text-xl">Liste des jeux vidéo</h4>
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
<h4 class="text-center font-bold text-xl mt-20">Liste des films</h4>

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
<h4 class="text-center font-bold text-xl mt-20">Liste des series</h4>
<?php
if (empty($serie)) : ?>
  <p>Aucun serie en base de donnée</p>
<?php else : ?>
  <?php foreach ($serie as $series) : ?>
    <main>
      
      <div class="ml-10 mt-10  ">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm  ">
        
        
          <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 font-bold"> <?= $series["titre"]; ?></h5>
          <hr>
          <div class="text-gray-700 text-base mb-4 mt-5 h-40 ">
          <span class="font-bold">Résumé :</span> <?= $series["resume"]; ?>
          </div>
          <div class="text-gray-700 text-base mb-4 genre  "><span class="font-bold">Acteur (trice) :</span> <?= $series["acteur"]; ?></div>
          <div class="text-gray-700 text-base mb-4 categorie">
          <span class="font-bold">Genre :</span> <?= $series["genre"]; ?>
          </div>
          <div class="info"><span class="font-bold">Nombre de saison :</span> <?= $series["saison"]; ?> </div>

        </div>
      </div>
    </main>
  <?php endforeach; ?>
<?php endif; ?>











<?php
include_once "include/footer_accueil.html";
?>