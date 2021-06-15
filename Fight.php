<?php 

require_once "Pokemon.php";

class Fight{
    private $message;

	public function __construct($pokemon1, $pokemon2)
    {
        
        // echo "<br>Pikachu attacks Charmeleon with ".$attacks1[0]->attackName.".<br>";
        // echo $attacks1[0]->attackDamage;
       
    }

    public function Attack($attacker, $defender, $move){
        // var_dump($attacker->GetAttacks());
        foreach($attacker->GetAttacks() AS $key=>$element){
            if ($element->attackName == $move){
                $attackIndex = $key;
            }
        }
        $this->CalculateDamage( $defender->GetWeakness(), $defender->GetResistance(), $attacker->GetAttacks()[$attackIndex]->attackDamage, $attacker->GetEnergyType(), $defender, $attacker);
    }

    public function CalculateDamage($weakness, $resistance, $damage, $attackerType, $defender, $attacker){
        if( $weakness->weaknessName == $attackerType){
            $attackdamage = $damage * $weakness->GetWeaknessMultiplier();
        } else if($resistance->resistanceName == $attackerType){
            $attackdamage = $damage - $resistance->GetResistanceMultiplier(); 
        }else{
            $attackdamage = $damage; 
        }
        $this->DealDamage($attackdamage, $defender, $attacker);
    }

    public function DealDamage($damage, $defender, $attacker){
        $currentHealth = $defender->GetHealth();
        $defender->SetHealth($currentHealth-$damage);
        $this->message = $attacker->GetName()." attacked ".$defender->GetName()." and dealt ".$damage." damage <br>".$defender->GetName()." has ".$defender->GetHealth()." health left<br>";

    }

    public function GetMessage(){
        return $this->message;
    }
    
       
}

