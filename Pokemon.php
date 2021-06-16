<?php
require "Weakness.php";
require "Resistance.php";
require "Attack.php";

class Pokemon{
	private $name;
	private $energytype;
	private $hitpoints;
	private $health;
	private $attacks;
	private $weakness;
	private $resistance;
    private static $population = 0;

	// $type, $hitpoints, $health
	public function __construct($newName, $type, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $newName;
        $this->energytype = $type;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$population++;
    }
    
    
    // All information about the pokemon
    public function SayInformation(){
    	return "Name: ". $this->GetName()."<br>
    	 Health: ". $this->GetHealth()."/".$this->GetHitpoints()."<br>
    	 Weakness: ". $this->GetWeakness()->weaknessName." ".$this->GetWeakness()->weaknessMultiplier."<br>
    	 Resistance: ". $this->GetResistance()->resistanceName." ".$this->GetResistance()->resistanceMultiplier."<br>
    	 Attack(s): ". $this->GetAttacks()[0]->GetAttackName()." ".$this->GetAttacks()[0]->GetAttackDamage().", ".$this->GetAttacks()[1]->GetAttackName()." ".$this->GetAttacks()[1]->GetAttackDamage()."<br><br>";
    }

    public function __toString() {
        return json_encode($this);
    }

    public function GetName(){
    	return $this->name;
    }

    public function GetHealth(){
    	return $this->health;
    }

    public function GetHitpoints(){
    	return $this->hitpoints;
    }

    public function GetEnergyType(){
    	return $this->energytype;
    }

    public function GetAttacks(){
    	return $this->attacks;
    }

    public function GetWeakness(){
    	return $this->weakness;
    }

    public function GetResistance(){
    	return $this->resistance;
    }

    public function SetName($newName){
    	$this->name = $newName;
    }

    public function SetEnergytype($newEnergytype){
    	$this->energytype = $newEnergytype;
    }

    public function SetHealth($newHealth){
        if($newHealth < 0){
            $this->health = 0;
        }else{
           $this->health = $newHealth;
        }

        if($newHealth <= 0){
            self::$population--;
        }
    	
    }

    public function SetHitpoints($newHitpoints){
    	$this->hitpoints = $newHitpoints;
    }

    public function SetAttack($newAttack, $newAttackdamage){
    	$cache = new Attack($newAttack, $newAttackdamage);
        $this->attacks [] = $cache;
    }	

    public function SetWeakness($newWeakness, $newMultiplier){
    	$this->weakness = new Weakness($newWeakness, $newMultiplier);
    	// var_dump($this->weakness);
    	// $this->weakness = new Weakness($newWeakness, $newMultiplier);
    }

    public function SetResistance($newResistance, $newMultiplier){
    	$this->resistance = new Resistance($newResistance, $newMultiplier);
    	// var_dump($this->resistance);
    }

    public static function getPopulation(){
        return self::$population;
    }
}
