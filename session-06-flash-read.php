<?php

// session-06-flash-read.php

session_start();

if (isset($_SESSION['infos'])) {
	foreach ($_SESSION['infos'] as $info) {
		echo $info . "<br />";
	}

	unset($_SESSION['infos']);
}
