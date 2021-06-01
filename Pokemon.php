<?php
require "Weakness.php";
require "Resistance.php";

class Pokemon{
	private $name;
	private $energytype;
	private $hitpoints;
	private $health;
	private $attack;
	private $weakness;
	private $resistance;
	
	public function __construct($newName)
    {
        $this->name = $newName;
        $this->energytype = "";
        $this->hitpoints = 0;
        $this->health = 0;
        $this->attack = [];
        $this->weakness = [];
        $this->resistance = "";
    }
    
    
    // All information about the pokemon
    public function SayInformation(){
    	echo "Name: ". $this->GetName()."<br>";
    	echo "Health: ". $this->GetHealth()."/".$this->GetHitpoints()."<br>";
    	echo "Weakness: ". $this->GetWeakness()->weaknessName." ".$this->GetWeakness()->weaknessMultiplier."<br>";
    	echo "Resistance: ". $this->GetResistance()->resistanceName." ".$this->GetResistance()->resistanceMultiplier."<br>";
    	echo "Attack(s): ". $this->GetAttack()."<br>";
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

    public function GetAttack(){
    	return $this->attack;
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
    	$this->health = $newHealth;
    }

    public function SetHitpoints($newHitpoints){
    	$this->hitpoints = $newHitpoints;
    }

    public function SetAttack($newAttack, $newAttackdamage){
    	$this->attack .=$newAttack. " | ".$newAttackdamage.", <br>";
    	// $this->attack .= [ $newAttack => $newAttackdamage ];
    }	

    public function SetWeakness($newWeakness, $newMultiplier){
    	$this->weakness = new Weakness($newWeakness, $newMultiplier);
    	echo $this->weakness->weaknessName;
    	var_dump($this->weakness);
    	// $this->weakness = new Weakness($newWeakness, $newMultiplier);
    }

    public function SetResistance($newResistance, $newMultiplier){
    	$this->resistance = new Resistance($newResistance, $newMultiplier);
    	var_dump($this->resistance);
    }
}
