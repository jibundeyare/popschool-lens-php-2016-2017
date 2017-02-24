<?php

// déclaration d'une classe parent
class Vehicule
{
	protected $passagers;

	public function getPassagers()
	{
		return $this->passagers;
	}

	public function setPassagers($passagers)
	{
		$this->passagers = $passagers;
	}
}

// déclaration d'une classe enfant qui hérite de Vehicule
class Moto extends Vehicule
{
	public function __construct()
	{
		$this->passagers = 2;
	}
}

// déclaration d'une classe enfant qui hérite de Vehicule
class Voiture extends Vehicule
{
	public function __construct()
	{
		$this->passagers = 4;
	}
}

// instanciation d'un objet de classe Moto
$m = new Moto();
echo $m->getPassagers() . "\n";

// instanciation d'un objet de classe Voiture
$v = new Voiture();
echo $v->getPassagers() . "\n";

