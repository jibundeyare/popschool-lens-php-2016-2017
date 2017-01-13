<?php

// affectation d'un tableau vide à une variable
$tableau = array();

// idem
$tableau = [];

var_dump($tableau);

// affectation d'un tableau contenant plusieurs types de variable
$tableau = array(123, 3.14, 'foo', true);

// idem
$tableau = [123, 3.14, 'foo', true];

var_dump($tableau);
