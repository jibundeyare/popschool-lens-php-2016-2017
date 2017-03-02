<?php

interface Timestampable
{
	public function timestamp();
}


trait TimestampableTrait
{
	public function timestamp()
	{
		echo get_class($this) . " horodaté le : " . date('YmdHis') . "\n";
	}
}

class User implements Timestampable
{
	use TimestampableTrait;
}

class Article implements Timestampable
{
	use TimestampableTrait;
}

function horodater(Timestampable $o) {
	$o->timestamp();
}

// provoque des erreurs
// horodater(42);
// horodater(true);
// horodater([123, 'foo']);

horodater(new User());
horodater(new Article());
