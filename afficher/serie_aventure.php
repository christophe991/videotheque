<?php
include_once "../include/header_serie.html";
include_once "../connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");
$serie = $bdd->query("SELECT titre, acteur,resume, genre, saison FROM serie WHERE genre LIKE \"%Aventure%\";" );
?>

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

