<?php

$texte = 'foo bar baz';

// attention : avec des simples quotes :
// - les variables ne sont pas interpolées
// - les caractères échappés (\n par exemple) ne sont pas interprêtés
echo '$texte\n';
