<?php

class Vehicule
{
	private $passagers;

	// constructeur
	public function __construct()
	{
		$this->passagers = 1;
	}

	// destructeur
	public function __destruct()
	{
		echo "destruction de la variable\n";
	}

	public function getPassagers()
	{
		return $this->passagers;
	}

	public function setPassagers($passagers)
	{
		$this->passagers = $passagers;
	}
}

$v = new Vehicule();
echo $v->getPassagers() . "\n";
$v->setPassagers(4);
echo $v->getPassagers() . "\n";

