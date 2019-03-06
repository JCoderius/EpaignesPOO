<?php


final class Magicien extends Personnage
{
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function __destruct()
    {
        echo "Objet detruit";
    }

    public $magie;
}