<?php

// définition d'une constante
define('UNE_CONSTANTE_NUMERIQUE', 123);

if (defined('UNE_CONSTANTE_NUMERIQUE')) {
	echo "la constante UNE_CONSTANTE_NUMERIQUE est définie\n";
}

if (!defined('UNE_CONSTANTE_TOTO')) {
	echo "la constante UNE_CONSTANTE_TOTO n'est pas définie\n";
}
