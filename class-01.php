<?php

// déclaration d'une classe
class Vehicule
{
	// déclaration d'un attribut (ou membre ou variable) publique
	public $passagers = 0;
}

// instanciation d'un objet de la classe Vehicule
$v = new Vehicule();

// utilisation de la variable publique
echo $v->passagers . "\n";
$v->passagers = 4;
echo $v->passagers . "\n";

