<?php

class TourOperator
{
    private int $id;
    private string $name;
    private string $link;
    private int $gradeCount;
    private int $gradeTotal;
    private bool $isPremium;

    function __construct(array $data)
    {
        $this->id = $data["id"];
        $this->name = $data["name"];
        $this->link = $data["link"];
        $this->gradeCount = $data["grade_count"];
        $this->gradeTotal = $data["grade_total"];
        $this->isPremium = $data["is_premium"];
    }
    function getId() : int
    {
        return $this->id;
    }
    function getName() : string
    {
        return $this->name;
    }
    function getLink() : string
    {
        return $this->link;
    }
    function getGradeCount() : int
    {
        return $this->gradeCount;
    }
    function getGradeTotal() : int
    {
        return $this->gradeTotal;
    }
    function getIsPremium() : bool
    {
        return $this->isPremium;
    }
}
