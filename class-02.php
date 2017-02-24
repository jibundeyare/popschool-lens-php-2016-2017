<?php

// déclaration d'une nouvelle classe
class Vehicule
{
	// déclaration d'un attribut privé
	private $passagers = 0;

	// déclaration d'une méthode (ou fonction) publique
	public function getPassagers()
	{
		return $this->passagers;
	}

	// déclaration d'une méthode (ou fonction) publique
	public function setPassagers($passagers)
	{
		$this->passagers = $passagers;
	}
}

// instanciation d'un objet de la classe Vehicule
$v = new Vehicule();
echo $v->getPassagers() . "\n";
$v->setPassagers(4);
echo $v->getPassagers() . "\n";

// instanciation d'un autre objet de la classe Vehicule
$v2 = new Vehicule();
$v2->setPassagers(3);
echo $v2->getPassagers() . "\n";
echo $v->getPassagers() . "\n";

