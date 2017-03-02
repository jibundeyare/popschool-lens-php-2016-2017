<?php

// session-06-flash-write.php

session_start();

$_SESSION['infos'] = [
	'lorem ipsum',
	'foo bar bvaz',
];
