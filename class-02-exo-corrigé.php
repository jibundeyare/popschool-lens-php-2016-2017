<?php

// créez une classe Utilisateur qui possède l'attribut suivant : email
// ajoutez les getters et setters correspondant

// instanciez un premier objet auquel vous attribuerez un email de votre choix
// instanciez un deuxième objet auquel vous attribuerez un autre email
// affichez les emails des deux objets

class Utilisateur
{
	private $email = '';

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
}

$u = new Utilisateur();
$u->setEmail('toto@pop.eu.com');

$u2 = new Utilisateur();
$u2->setEmail('titi@pop.eu.com');

echo $u->getEmail() . "\n";
echo $u2->getEmail() . "\n";

