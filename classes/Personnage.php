<?php

class Personnage
{
    protected $nom;
    protected $vie = 100;
    protected $attaque;
    protected $taille;
    protected $masse;
    protected $race;

    protected function marcher()
    {
        return "Je marche!";
    }

    protected function recuperePointDeVie() : int
    {
        return $this->vie;
    }


}