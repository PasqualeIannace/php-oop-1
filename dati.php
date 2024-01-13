<?php
$film1 = new Movie("Barbie", "Greta Gerwig", "Commedia/Cinema fantastico", "21 luglio 2023");
$film2 = new Movie("12 Angry Men", "Sidney Lumet", "Giallo/Thriller", "14 novembre 1957");
$film3 = new Movie("Blue Valentine", "Derek Cianfrance", "Romantico/Drammatico", "14 febbraio 2013");
$film4 = new Movie("After Hours", "Martin Scorsese", "Commedia/Thriller", "11 ottobre 1985");
class Movie
{
    public $nomeFilm;
    public $regista;
    public $genere;
    public $dataDiUscita;

    public function __construct($nome, $regista, $genere, $data)
    {
        $this->nomeFilm = $nome;
        $this->regista = $regista;
        $this->genere = $genere;
        $this->dataDiUscita = $data;
    }

    public function getInfo()
    {
        return $result = $this->nomeFilm . ", " . $this->regista . ", " . $this->dataDiUscita . ", " . $this->genere;
    }
}

$movies = array($film1, $film2, $film3, $film4);
