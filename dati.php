<?php
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

$movies = [];
