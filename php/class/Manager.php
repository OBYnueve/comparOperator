<?php

class Manager
{
    private $bdd;
    
    function __construct()
    {
        require "./utils/ConnectDataBase.php";
        $this->bdd = $connect;
    }
    public function getAllDestination() : void{
        $allDestination = $this->bdd->query("SELECT * FROM destination");
        $allDestination->execute();
        while($destination = $allDestination->fetch()){
            var_dump($destination);
        }
    }
    public function getOperatorByDestination($destination) : void{
        $OpByDestination = $this->bdd->prepare("SELECT tour_operator_id FROM destination WHERE destination.id = ?");
        $OpByDestination->execute(array($destination));
        var_dump($OpByDestination->fetch());
    }
    public function createReview(string $message, string $author, TourOperator $object) : void{
        $reviewNew = $this->bdd->prepare("INSERT INTO review (message, author, tour_operator_id) VALUES (?, ?, ?)");
        $reviewNew->execute(array($message, $author, $object->getId()));
    }
    public function getReviewByOperatorId($operatorID) : void{
        $ReviewByOp = $this->bdd->prepare("SELECT review.id FROM review WHERE tour_operator_id = ?");
        $ReviewByOp->execute(array($operatorID));
        var_dump($ReviewByOp->fetch());
    }
    public function getAllOperator() : void{
        $allOperator = $this->bdd->query("SELECT * FROM tour_operator");
        $allOperator->execute();
        while($operator = $allOperator->fetch()){
            var_dump($operator);
        }
    }
    public function updateOperatorToPremium($operatorID) : void{
        $updateOperator = $this->bdd->prepare("UPDATE tour_operator SET is_premium = 1 WHERE id = ?");
        $updateOperator->execute(array($operatorID));
    }
    public function createTourOperator($name, $link, $grade_count = 0, $grade_total = 0, $is_premium = 0) : void{
        $operatorNew = $this->bdd->prepare("INSERT INTO tour_operator (name, link, grade_count, grade_total, is_premium) VALUE (?, ?, ?, ?, ?)");
        $operatorNew->execute(array($name, $link, $grade_count, $grade_total, $is_premium));
    }
    public function createDestination(string $location, int $price, $tourOperatorID) : void{
        $destinationNew = $this->bdd->prepare("INSERT INTO destination (location, price, tour_operator_id) VALUE (?, ?, ?)");
        $destinationNew->execute(array($location, $price, $tourOperatorID));
    }
}
