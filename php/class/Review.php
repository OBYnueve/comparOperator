<?php

class Review
{
    private int $id;
    private string $message;
    private string $author;
    private int $tourOperatorId;

    function __construct(array $data)
    {
        $this->id = $data["id"];
        $this->message = $data["message"];
        $this->author = $data["author"];
        $this->tourOperatorId = $data["tour_operator_id"];
    }
    function getId() : int
    {
        return $this->id;
    }
    function getMessage() : string
    {
        return $this->message;
    }
    function getAuthor() : string
    {
        return $this->author;
    }
    function getTourOperatorId() : int
    {
        return $this->tourOperatorId;
    }
}
