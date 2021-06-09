<?php 

require_once "Pokemon.php";

class Pikachu extends Pokemon {

	public function __construct($newName)
    {
        $this->SetName($newName);
        $this->SetEnergytype("Lightning");
        $this->SetHitpoints(60);
        $this->SetHealth(60);
        $this->SetAttack("Electric Ring", 50);
        $this->SetAttack("Pika Punch", 20);
        $this->SetWeakness("Fire", 1.5);
        $this->SetResistance("Fighting", 20);
        // parent::__construct($newName,"Lightning",60,60);
    }


    
}