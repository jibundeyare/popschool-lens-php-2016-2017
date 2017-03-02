<?php

abstract class Vehicule
{
	// une méthode abstraite force les classes enfants à implémenter la fonction
	abstract public function demarrer();
}

class Voiture extends Vehicule
{
	// si la fonction n'est pas implémentée, cela provoque une erreur
	public function demarrer()
	{
		echo "je démarre le moteur\n";
	}
}

class Velo extends Vehicule
{
	// si la fonction n'est pas implémentée, cela provoque une erreur
	public function demarrer()
	{
		echo "je pédale\n";
	}
}

$vt = new Voiture();
$vt->demarrer();

$vl = new Velo();
$vl->demarrer();
