<?php
class Movie
{
    public $name;
    public $description;
    public $year;
    public $genre;

    public function stampa(){
        return "$this->name $this->year";
    }

    public function __construct($name,$description,$year,$genre){
        $this->name = $name;
        $this->description = $description;
        $this->year = $year;
        $this->genre = $genre;
    }
}
?>