<?php

require "Pokemon.php";
require "Fight.php";
require "Pikachu.php";
require "Charmeleon.php";


$pokemon1 = new Pikachu("Pikachu");


$pokemon2 = new Charmeleon("Charmeleon");


echo $pokemon1->SayInformation();
echo $pokemon2->SayInformation();


$fight = new Fight($pokemon1, $pokemon2);

echo "<br>";

$fight->Attack($pokemon1, $pokemon2, "Electric Ring");
echo $fight->GetMessage();

echo "<br>";

$fight->Attack($pokemon2, $pokemon1, "Flare");
echo $fight->GetMessage();
echo " <br>Number of pokemons alive: ".Pokemon::getPopulation();