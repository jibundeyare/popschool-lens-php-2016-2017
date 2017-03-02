<?php

// créez une classe vendeur
// créez une classe client
// les deux classes possèdent une adresse email

// vous devrez implémenter une interface Emailable qui me garanti que les méthodes suivante existent :
// - getEmail()
// - setEmail($email)
// vous devrez créer un trait EmailableTrait dans lequel il y aura :
// - une variable protégée $email
// - un getter pour la variable $email
// - un setter pour la variable $email

interface Emailable
{
	public function getEmail();
	public function setEmail($email);
}

trait EmailableTrait
{
	private $email;

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
}

class Vendeur implements Emailable
{
	use EmailableTrait;
}

class Client implements Emailable
{
	use EmailableTrait;
}

$v = new Vendeur();
$v->setEmail('foo@bar.com');
echo $v->getEmail() . "\n";

$c = new Client();
$c->setEmail('lorem@baz.com');
echo $c->getEmail() . "\n";

var_dump(is_a($v, 'Emailable'));
var_dump(is_a($c, 'Emailable'));
