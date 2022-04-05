<?php

class Destination
{
    private int $id;
    private string $location;
    private int $price;
    private int $tourOperatorId;

    function __construct(array $data)
    {
        $this->id = $data["id"];
        $this->location = $data["location"];
        $this->price = $data["price"];
        $this->tourOperatorId = $data["tour_operator_id"];
    }
    function getId() : int
    {
        return $this->id;
    }
    function getLocation() : string
    {
        return $this->location;
    }
    function getPrice() : int
    {
        return $this->price;
    }
    function getTourOperatorId() : int
    {
        return $this->tourOperatorId;
    }
}