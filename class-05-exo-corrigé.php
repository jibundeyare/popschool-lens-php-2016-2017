<?php

// créez une classe Animal qui possède l'attribut "dureeDeVie"
// créez une classe Souris qui hérite de Animal, dont la durée de vie est de 2 ans
// créez une classe Elephant qui hérite de Animal, dont la durée de vie est de 80 ans

// instanciez un objet de type Souris et affichez sa duree de vie
// instanciez un objet de type Elephant et affichez sa duree de vie

class Animal
{
	protected $dureeDeVie;

	public function getDureeDeVie()
	{
		return $this->dureeDeVie;
	}

	public function setDureeDeVie($dureeDeVie)
	{
		$this->dureeDeVie = $dureeDeVie;
	}
}

class Souris extends Animal
{
	public function __construct()
	{
		$this->dureeDeVie = 2;
	}
}

class Elephant extends Animal
{
	public function __construct()
	{
		$this->dureeDeVie = 80;
	}
}

$s = new Souris();
echo $s->getDureeDeVie() . "\n";

$e = new Elephant();
echo $e->getDureeDeVie() . "\n";
