<?php 

require_once "Pokemon.php";

class Charmeleon extends Pokemon {
	
	public function __construct($newName)
    {
        $this->SetName($newName);
        $this->SetEnergytype("Fire");
        $this->SetHitpoints(60);
        $this->SetHealth(60);
        $this->SetAttack("Head Butt", 10);
        $this->SetAttack("Flare", 30);
        $this->SetWeakness("Water", 2);
        $this->SetResistance("Lightning", 10);
        // parent::__construct($newName,"Lightning",60,60);
    }
}