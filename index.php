<?php
require "./utils/AutoLoad.php";
Autoloader::register();
$manager = new Manager();
$tableauDestination = $manager->getAllDestination();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>ComparOperator</title>
</head>

<body>
   
<?php require "./inc/header.php" ?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
        <div class="carousel-inner">
            <div class="carousel-item active" style="width:100%; height : auto; ">
                <img src="img/475457-Los-Angeles.webp" class="d-block w-100" alt="Los-Angeles">
            </div>
            <div class="carousel-item" style="width:100%; height:auto;">
                <img src="img/Italie-paysage-©-iStock-1093694146.jpg" class="d-block w-100" alt="Italie">
            </div>
            <div class="carousel-item" style="width:100%; height:auto;">
                <img src="img/(Image)-image-Japon-Fujiyoshida-Pagode-de-Chureito-et-mont-Fuji-au-printemps-as_284756420.jpg" class="d-block w-100" alt="canada">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- barre de recherche -->
    <form method="post" id="barre">
        <div class="form-group">
            <label for="provenance">Ville de départ</label>
            <input type="text" name="provenance" id="provenance" placeholder="Paris, Milan, ...">

            <label for="arrivee">Ville d'arrivée</label>
            <input type="text" name="arrivee" id="arrivee" placeholder="Paris, Milan, ...">
        </div>

        <div class="form-group">
            <label for="depart">Date de départ</label>
            <input type="date" name="depart" id="depart" value="2020/04/13">

            <label for="retour">Date de Retour</label>
            <input type="date" name="retour" id="retour" value="2020/04/13">
        </div>

        <div class="form-group">
            <label for="type">Categorie</label>
            <select name="type" id="type">
                <option selected="selected">Classe Economique</option>
                <option>Classe Affaires</option>
            </select>
        </div>

        <div class="button-submit">
            <input type="submit" value="Lancer la recherche" name="recherche" id="recherche">
        </div>
    </form>
    <!-- barre de recherche -->
    </div>
    <div class="container">
        <div class="row wrap p-5 justify-content-between " style="width: 100%;">

            <?php for ($i = 0; $i < count($tableauDestination); $i++) { ?>

                <div class="card p-3 m-3" style="width: 18rem;">
                    <img src="./img/khao-sok-parc-thailande.1533479.jpeg" class="card-img-top" alt="thailande">
                    <div class="card-body">
                        <div class="overlay">
                            <span class="id">Id : <?= $tableauDestination[$i]->getId(); ?><br></span>
                            <span class="prix">Prix : <?= $tableauDestination[$i]->getPrice(); ?>€<br></span>
                            <span class="nom">Destination : <?= $tableauDestination[$i]->getLocation(); ?><br></span>
                        </div>
                        <p class="card-text"></p>
                        <button type="button" class="btn btn-dark">Comparateur<? $argument["tour_operator_id"]; ?></button>
                    </div>
                </div>

            <?php } ?>

            <?php require "./inc/footer.php" ?>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>