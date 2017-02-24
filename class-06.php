<?php

// déclaration d'une classe abstraite (ce qui empêche son instanciation)
abstract class Vehicule
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

class Moto extends Vehicule
{
	public function __construct()
	{
		$this->passagers = 2;
	}
}

class Voiture extends Vehicule
{
	public function __construct()
	{
		$this->passagers = 4;
	}
}

// instanciation d'une classe abstraite interdite
// $vh = new Vehicule();

// instanciation d'un objet de classe Moto
$m = new Moto();
echo $m->getPassagers() . "\n";

// instanciation d'un objet de classe Voiture
$v = new Voiture();
echo $v->getPassagers() . "\n";

