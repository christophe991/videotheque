<?php
include_once "include/header_accueil.html";
?>

<?php
include_once "../Gestionbdd/connexion/connexion_bdd.php";
$bdd = new PDO("mysql:host=localhost;dbname=videotheque;charset=utf8", "root", "");

if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['genre']) && !empty($_POST['plateforme'])) {
    $titre = $connexion->quote($_POST['titre']);
    $description = $connexion->quote($_POST['description']);
    $genre = $connexion->quote($_POST['genre']);
    $plateforme = $connexion->quote($_POST['plateforme']);

    $requete = "INSERT INTO `videotheque` . `jeu` (`titre`, `description`, `genre`, `plateforme`) VALUES ($titre, $description, $genre, $plateforme);";
   
    $nbLignes = $connexion->exec($requete);

    if ($nbLignes != 1) {
        $erreur = $connexion->errorInfo();
        echo "Probleme lors de l'insertion : " . $erreur[2] . "- Code : " . $connexion->errorCode();
    } else {
        echo "Nouveau jeu enregistré ID : " . $connexion->lastInsertId();
    }
}
$connexion = null;
?>





<section class="h-screen">
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white   ">
            <legend class="text-center">Ajouter a la base de données</legend>
            <div class="flex justify-center mt-10 ">
            <div><input type="checkbox" class=" ml-5 form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck2" />
                <label class="form-check-label inline-block text-gray-800" for="jeu">jeu</label>
            </div>
            <div><input type="checkbox" class="ml-5 form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck2" />
                <label class="form-check-label inline-block text-gray-800" for="film">film</label>
            </div>
            <div><input type="checkbox" class=" ml-5 form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="exampleCheck2" />
                <label class="form-check-label inline-block text-gray-800" for="serie">serie</label>
            </div>
            </div>

            <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                <form>

                    <div class="mb-6 mt-10">
                        <label for="titre" class="font-bold">Titre</label>
                        <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="titre" />

                    </div>

                    <!-- Password input -->
                    <div class="mb-6">
                        <label for="description" class="font-bold">Déscription</label>
                        <textarea type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="entré le texte ici ">
                </textarea>
                    </div>
                    <div class="mb-6">
                        <label for="genre" class="font-bold">Genre</label>
                        <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="genre" />

                    </div>
                    <div class="mb-6">
                        <label for="plateforme" class="font-bold">Plate-forme</label>
                        <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="ex:xbox" />

                    </div>
                    <div class="mb-6">
                        <label for="duree" class="font-bold">Durée</label>
                        <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="ex:60min" />

                    </div>
                    <div class="mb-6">
                        <label for="saison" class="font-bold">Nombre de saison(s)</label>
                        <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="ex:6" />

                    </div>

                    <div class="text-center lg:text-left">
                        <button type="button" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            Valider
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>