<?php 

require_once "Pokemon.php";

class Fight{
    private $pok1;
	private $pok2;
	// public $attacks2;

	public function __construct($pokemon1, $pokemon2)
    {
        $this->pok1 = $pokemon1;
        $this->pok2 = $pokemon2;

        var_dump($pokemon1);
        $test = $pokemon1->GetName();
        echo $test;

        $attacks1 = $pokemon1->GetAttacks();
        var_dump($attacks);
        
        // echo "<br>Pikachu attacks Charmeleon with ".$attacks1[0]->attackName.".<br>";
        // echo $attacks1[0]->attackDamage;
       
    }

    public function Attack($attacker, $defender, $move){
        echo "<br><br><br><br><br><br>";
        var_dump($attacker->GetAttacks());
        foreach($attacker->GetAttacks() AS $key=>$element){
            if ($element->attackName == $move){
            echo "Gottcha! The index is - ". $key;
            $attackIndex = $key;
            }
        }
        // var_dump($defender->GetWeakness());
        $this->CalculateDamage( $defender->GetWeakness(), $defender->GetResistance(), $attacker->GetAttacks()[$attackIndex]->attackDamage, $attacker->GetEnergyType(), $defender);
    }

    public function CalculateDamage($weakness, $resistance, $damage, $attackerType, $defender){
        if( $weakness->weaknessName == $attackerType){
            $attackdamage = $damage * $weakness->weaknessMultiplier;
        } else if($resistance->resistanceName == $attackerType){
            $attackdamage = $damage - $resistance->resistanceMultiplier; 
        }else{
            $attackdamage = $damage; 
        }
        echo "<br><br><br>";
        echo "Damage ".$attackdamage;
        $currentHealth = $defender->GetHealth();
        $defender->SetHealth($currentHealth-$attackdamage);
        echo "<br><br><br>";
        echo "Health left ".$defender->GetHealth();
    }
       
}

