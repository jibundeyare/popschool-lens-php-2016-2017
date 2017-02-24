<?php

class Vehicule
{
	private $passagers;
	private $capacite;

	// constructeur avec paramètre
	public function __construct($capacite)
	{
		$this->passagers = 0;
		$this->capacite = $capacite;
	}

	public function getPassagers()
	{
		return $this->passagers;
	}

	public function setPassagers($passagers)
	{
		$this->passagers = $passagers;
	}

	public function getCapacite()
	{
		return $this->capacite;
	}

	public function setCapacite($capacite)
	{
		$this->capacite = $capacite;
	}
}

$v = new Vehicule(4);
echo $v->getCapacite() . "\n";

$v2 = new Vehicule(2);
echo $v2->getCapacite() . "\n";

