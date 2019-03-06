<?php

class Personnage
{
    public $nom;
    public $vie = 100;
    public $attaque;
    public $taille;
    public $masse;
    public $race;

    public function marcher()
    {
        return "Je marche!";
    }

    public function recuperePointDeVie() : int
    {
        return $this->vie;
    }


}