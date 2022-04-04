<?php
require "./utils/ConnectDataBase.php";
require "./utils/AutoLoad.php";
Autoloader::register();
require_once "./utils/InternetProtocol.php";

$manager = new Manager();
$argument = $connect->prepare("SELECT * FROM tour_operator WHERE id = 1");
$argument->execute();
$response = $argument->fetch();

$tourOperator = new TourOperator($response);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ComparOperator</title>
    </head>
    <body>
        <header>

        </header>

        <?php $manager->createTourOperator("Agence", "www.mon-agence.fr"); ?>
        
        <footer>

        </footer>
    </body>
</html>