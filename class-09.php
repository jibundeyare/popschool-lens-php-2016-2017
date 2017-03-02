<?php

interface Commentable
{
	public function commenter($texte);
}

trait CommentableTrait
{
	public function commenter($texte)
	{
		echo "commentaire : " . $texte . "\n";
	}
}

class Article implements Commentable
{
	use CommentableTrait;
}

class Photo implements Commentable
{
	use CommentableTrait;
}

$a = new Article();
$p = new Photo();

$a->commenter('lorem');
$p->commenter('ipsum');
