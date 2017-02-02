<?php

try {
	include 'exception-throw.php';
} catch (Exception $e) {
	echo $e->getMessage() . "\n";
	exit();
}
