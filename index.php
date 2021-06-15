<?php

require "Pokemon.php";
require "Fight.php";
require "Pikachu.php";
require "Charmeleon.php";

$pokemon1 = new Pikachu("Pikachu");

// print_r('<pre>'. $pokemon1 . '</pre>');


$pokemon2 = new Charmeleon("Charmeleon");

// print_r('<pre>'. $pokemon2 . '</pre>');

echo $pokemon1->SayInformation();
echo $pokemon2->SayInformation();


$fight = new Fight($pokemon1, $pokemon2);

echo "<br>";

$fight->Attack($pokemon1, $pokemon2, "Electric Ring");
echo $fight->GetMessage();

echo "<br>";

$fight->Attack($pokemon2, $pokemon1, "Flare");
echo $fight->GetMessage();
echo Pokemon::getPopulation();