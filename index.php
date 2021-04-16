<?php
require 'jeux';
$nom1 = new jeux("nom1");
$nom2 = new jeux("nom2");
var_dump($nom1, $nom2);
$nom1->attack($nom2);
var_dump($nom1);
var_dump($nom1->vie());