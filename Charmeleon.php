<?php 

require_once "Pokemon.php";

class Charmeleon extends Pokemon {
	
	public function __construct($newName)
    {
        parent::__construct($newName,"Fire",60,60, [new Attack("Head Butt", 10), new Attack("Flare", 30)], new Weakness("Water", 2), new Resistance("Lightning", 10));
    }
}