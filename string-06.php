<?php

$foo = 'foo';

// affectation d'une chaîne de caractères avec la notation heredoc
$texte = <<<EOT
$foo
"lorem ipsum"
'foo bar baz'

EOT;

echo $texte;
echo "\n";

// affectation d'une chaîne de caractères avec la notation nowdoc
$texte2 = <<<'EOT'
$foo
"lorem ipsum"
'foo bar baz'

EOT;

echo $texte2;
