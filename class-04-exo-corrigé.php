<?php

// créez une classe Email qui possède les attributs "domaine" et "user"
// créez les getters et les setters pour chaque attribut
// le constructeur peut prendre un paramètre nommé "user"
// dans le constructeur :
// - affectez la valeur par défaut "pop.eu.com" à l'attribut "domaine"
// - affectez le paramètre "user" à l'attribut "user"

// créez un objet de classe Email en passant en paramètre le nom d'un user
// affichez la valeur de son attribut "domaine"
// affichez la valeur de son attribut "user"

class Email
{
	private $domaine;
	private $user;

	public function __construct($user)
	{
		$this->domaine = "pop.eu.com";
		$this->user = $user;
	}

	public function getDomaine()
	{
		return $this->domaine;
	}

	public function setDomaine($domaine)
	{
		$this->domaine = $domaine;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}

	public function getEmail()
	{
		return $this->user . '@' . $this->domaine;
	}

	public function __toString()
	{
		return $this->user . '@' . $this->domaine;
	}
}

$e = new Email('toto');
echo $e->getUser() . "\n";
echo $e->getDomaine() . "\n";
echo $e->getEmail() . "\n";
echo $e . "\n";

