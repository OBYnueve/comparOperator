<?php
require "./utils/ConnectDataBase.php";
require "./utils/AutoLoad.php";
Autoloader::register();
require_once "./utils/InternetProtocol.php";

$manager = new Manager();


$arguments = $connect->query("SELECT * FROM destination");
$arguments->execute();
$result = $arguments->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
$destination = new Destination($result);

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
    <header>
        <nav class="navbar navbar-light bg-purple">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://comparoperator.test/">ComparOperator</a>
                <a class="navbar-brand fa fa-plane" href="...">Vols</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
  <div class="carousel-inner">
    <div class="carousel-item active" style="width:100%; height : auto; ">
      <img src="img/475457-Los-Angeles.webp" class="d-block w-100" alt="Los-Angeles">
    </div>
    <div class="carousel-item" style="width:100%; height:auto;">
      <img src="img/Italie-paysage-©-iStock-1093694146.jpg" class="d-block w-100" alt="Italie">
    </div>
    <div class="carousel-item" style="width:100%; height:auto;">
      <img src="img/moraine-lake.1473669.c375x224.jpg" class="d-block w-100" alt="canada">
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
            <input type="date" name="depart" id="depart" value="13/04/2020">

            <label for="retour">Date de Retour</label>
            <input type="date" name="retour" id="retour" value="14/04/2020">
        </div>

        <div class="form-group">
            <label for="adultes">Nombre d'adultes</label>
            <select name="adultes" id="adultes">
                <option selected="selected">0 Adulte</option>
                <option>1 Adulte</option>
                <option>2 Adultes</option>
                <option>3 Adultes</option>
                <option>4 Adultes</option>
                <option>5 Adultes</option>
            </select>

            <label for="enfants">Nombre d'enfants</label>
            <select name="enfants" id="enfants">
                <option selected="selected">0 Enfant</option>
                <option>1 Enfant</option>
                <option>2 Enfants</option>
                <option>3 Enfants</option>
                <option>4 Enfants</option>
                <option>5 Enfants</option>
            </select>

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
        <div class="row wrap p-5 justify-content-between "style = "width: 100%;">

<?php foreach($arguments as $argument){ ?>

    <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/khao-sok-parc-thailande.1533479.jpeg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="id"><? $argument["id"]; ?></span>
                        <span class="prix"><? $argument["price"]; ?></span>
                        <span class="nom"><? $argument["location"]; ?></span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark"><? $argument["tour_operator_id"]; ?></button>
                </div>
            </div>

<?php } ?>
            <!-- Thailande -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/khao-sok-parc-thailande.1533479.jpeg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 80€</span>
                        <span class="nom">Thailande</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
            <!-- Japon -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/(Image)-image-Japon-Fujiyoshida-Pagode-de-Chureito-et-mont-Fuji-au-printemps-as_284756420.jpg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 170€</span>
                        <span class="nom">Japon</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
            <!-- Italie -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/Italie-paysage-©-iStock-1093694146.jpg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 440€</span>
                        <span class="nom">Italie</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
            <!-- Los Angeles -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/475457-Los-Angeles.webp" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 600€</span>
                        <span class="nom">Los Angeles</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
            <!-- New Mexique -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/Property-5a7d35d0be1d5c3b6bf9628b6f851ba5-92626705.jpg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 700€</span>
                        <span class="nom">New Mexique</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
            <!-- Brésil -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/téléchargement.jpg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 500€</span>
                        <span class="nom">Brésil</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
            <!-- France -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/téléchargement (1).jpg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 100€</span>
                        <span class="nom">France</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
            <!-- Canada -->
            <div class="card p-3 m-3" style="width: 18rem;">
                <img src="./img/moraine-lake.1473669.c375x224.jpg" class="card-img-top" alt="thailande">
                <div class="card-body">
                <div class="overlay">
                        <span class="prix">Dès 700€</span>
                        <span class="nom">Canada</span>
                    </div>
                    <p class="card-text"></p>
                    <button type="button" class="btn btn-dark">Buy</button>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-snapchat"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
            </div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company ComparOperator © 2022</p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>