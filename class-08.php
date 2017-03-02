<?php

interface Commentable
{
	public function commenter($texte);
}

class Article implements Commentable
{
	public function commenter($texte)
	{
		echo "commentaire : " . $texte . "\n";
	}
}

class Photo implements Commentable
{
	public function commenter($texte)
	{
		echo "commentaire : " . $texte . "\n";
	}
}

class Evenement implements Commentable
{
	public function commenter($texte)
	{
		echo "commentaire : " . $texte . "\n";
	}
}

$a = new Article();
$p = new Photo();
$e = new Evenement();

var_dump(is_a($a, 'Article'));
var_dump(is_a($a, 'Commentable'));

var_dump(is_a($p, 'Photo'));
var_dump(is_a($p, 'Commentable'));

var_dump(is_a($e, 'Evenement'));
var_dump(is_a($e, 'Commentable'));

function commenter(Commentable $c, $texte) {
	$c->commenter($texte);
}

commenter($a, 'lorem');
commenter($p, 'ipsum');
commenter($e, 'foo');
commenter(123, 'foo');
