<?php

// affichez les messages flash

session_start();

if (isset($_SESSION['infos'])) {
	foreach ($_SESSION['infos'] as $info) {
		echo $info . "<br />";
	}

	unset($_SESSION['infos']);
}
