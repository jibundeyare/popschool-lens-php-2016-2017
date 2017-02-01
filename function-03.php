<?php

function volume($l, $h = 10, $p = 10) {
	return $l * $h * $p;
}

$l = 10;
$h = 20;
$p = 30;

$v = volume($l);
var_dump($v);

$v = volume($l, $h);
var_dump($v);

$v = volume($l, $h, $p);
var_dump($v);
