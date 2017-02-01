<?php

use Symfony\Component\Yaml\Yaml;

require __DIR__ . '/vendor/autoload.php';

function getYaml($file = 'sacrifice.yml') {
	return Yaml::parse(file_get_contents($file));
}

$data = getYaml();

// var_dump($data);

$victims = $data['victims'];

$fate = random_int(0, count($victims) - 1);

echo "{$victims[$fate]} a été désigné(e)\n";

