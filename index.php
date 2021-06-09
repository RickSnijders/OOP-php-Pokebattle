<?php

require "Pokemon.php";
require "Fight.php";
require "Pikachu.php";
require "Charmeleon.php";

$pokemon1 = new Pikachu("Pikachu");

// print_r('<pre>'. $pokemon1 . '</pre>');


$pokemon2 = new Charmeleon("Charmeleon");

// print_r('<pre>'. $pokemon2 . '</pre>');

$pokemon1->SayInformation();
$pokemon2->SayInformation();


$fight = new Fight($pokemon1, $pokemon2);
