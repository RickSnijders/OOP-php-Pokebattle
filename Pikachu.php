<?php 

require_once "Pokemon.php";

class Pikachu extends Pokemon {

	public function __construct($newName)
    {
        parent::__construct($newName,"Lightning",60,60, [new Attack("Electric Ring", 50), new Attack("Pika Punch", 20)], new Weakness("Fire", 1.5), new Resistance("Fighting", 20));
    }
    
}